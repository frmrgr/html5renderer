HTML5Renderer
=============
HTML5Renderer ia a free open source library designed to simplify programming
of HTML5 pages in PHP. Some of its features are:

* Single "echo" - we can use single echo or print command to output the whole HTML5 tree.
* Correct code automatically - HTML5Renderer builds syntactically correct code.
  The library renders automatically all tags and handles proper nesting. It also
  aligns them for easier readability.
* No templatings - no web templating system is needed since HTML5Renderer itself
  generates the HTML5 code.

A good programming skill in HTML5 and PHP is required for using it, usage
of an IDE (e.g NetBeans, Zend Studio) is recommended.

Licence: [GNU GPL](http://www.gnu.org/copyleft/gpl.html), see also README.md


Usage
-----

The first is an inclusion command, so that index.php can recognize the library.

    <?php
      require_once 'config.php';
      require_once 'lib/HTML5Renderer/tags.php';
      $html = new Html();
      //.....
      //All other tags and subtags
      //.....
      echo $html;//the sole 'echo' or 'print' is enough
    ?>

File config.php has to contains at least lines

    <?php
      /**
       * Is it for developing, setting that it shows errors of wrong attribute values
       * @var bool is developing version 
       */
      define('H5R_DEV', true);

      /**
       * Symbol for setting a stairs (line's beginning) of generating HTML5 code for code alignment
       * "\t" or " " or "  " or  "   " or .. are advisable.
       */
      define('H5R_STEP', "   ");

      /**
       * Setting into one line if it's 'true' -  remove step symbols from 
       * lines' beginnings and new lines, that source code looks like
       * "<!DOCTYPE HTML><html><head><title>My Homepage</title></head><body></body></html>"
       */
      define('H5R_ONELINE', false);
    ?>


Each tag-class has constructor with two parameters type, value, condition and contition type:
Type has following settings

    1 - <tagname />
    2 - <tagname>
        </tagname>
    3 - <tagname></tagname>

Value works only if type is 2 or 3 and generates in the form

    <tagname>value</tagname>

(if the value is not a tag) or

    <tagname>
      value
    </tagname>

correspondingly.

Condition is a string like "IE", "!IE", etc.

ConditionType is number (default=1):

    0:
       <![if condition]>
          ...
       <![endif]>
    1:
       <!--[if condition]>
          ...
       <![endif]-->
    2:
       <!--[if condition]>-->
          ...
       <!--<![endif]-->
    3:
       <!--[if condition]><!-->
          ...
       <!--<![endif]-->

TODO: tingimuslaused

Examples
--------

1.

    <?php
        require_once 'config.php';
        require_once 'lib/HTML5Renderer/tags.php'; // includes the PHP plugin
        $html = Tags::html(); //defines html-tag
        echo $html;
    ?>

Result:

    <!DOCTYPE HTML>
    <html>
    </html>

2.

    <?php
        require_once 'config.php';
        require_once 'lib/HTML5Renderer/tags.php';
        $head = Tags::head();
        $head->addTag(Tags::title(3,"My First Homepage"));
        $body = Tags::body();
        $html = Tags::html(2,$head);
        $html->setAttrXmlns('http://www.w3.org/1999/xhtml');
        $html->addTag($body);
        echo $html;
    ?>

Result:

    <!DOCTYPE HTML>
      <html xmlns="http://www.w3.org/1999/xhtml">
      <head>
        <title>My First Homepage</title>
      </head>
      <body>
      </body>
    </html>

For the same result we can use also chains of methods:

    <?php
        require_once 'config.php';
        require_once 'lib/HTML5Renderer/tags.php';
        $head = Tags::head()->addTag(Tags::title(3,"My First Homepage"));
        echo Tags::html(2,$head)->addTag(Tags::body())->setAttrXmlns('http://www.w3.org/1999/xhtml');
    ?>

or

    <?php
        require_once 'config.php';
        require_once 'lib/HTML5Renderer/tags.php';
        echo Tags::html(2,Tags::head()
                ->addTag(Tags::title(3,"My First Homepage")))
            ->addTag(Tags::body())
            ->setAttrXmlns('http://www.w3.org/1999/xhtml');
    ?>

.. and we can add the code else, e.g to recognize browsers:

    <?php
        require_once 'config.php';
        require_once 'lib/HTML5Renderer/tags.php';
        echo Tags::html(2,Tags::head()
                ->addTag(Tags::title(3,"My First Homepage"))
            )->addTag(Tags::body()
                ->addTag(Tags::h1(3,"My First Homepage"))
                //<!--[if IE]>..<![endif]-->
                ->addTag(Tags::h2(3,"Welcome to Internet Explorer"),"IE")
                //<!--[if !IE]>--> ... <!--<![endif]-->
                ->addTag(Tags::h2(3,"Your browser isn't Internet Explorer"),"!IE",2)
                )->setAttrXmlns('http://www.w3.org/1999/xhtml');
    ?>

that results

    <?php
      <!DOCTYPE HTML>
      <html xmlns="http://www.w3.org/1999/xhtml">
         <head>
            <title>My First Homepage</title>
         </head>
         <body>
            <h1>My First Homepage</h1>
            <!--[if IE]>
               <h2>Welcome to Internet Explorer</h2>
            <![endif]-->
            <!--[if !IE]>-->
               <h2>Your browser isn't Internet Explorer</h2>
            <!--<![endif]-->
         </body>
      </html>
    ?>

The next is a bigger example, showing how to make a multiplication
table with the HTML5Renderer:


3.

    <?php
        require_once 'config.php';
        require_once 'lib/HTML5Renderer/tags.php';

        //<meta content="text/html" http-equiv="content-type" charset="UTF-8" />
        $head = Tags::head();
        $head->addTag(Tags::title(3,"My First Homepage"))
            ->addTag(Tags::meta(1)
                ->setAttrContent("text/html")
                ->setAttrHttpEquiv('content-type')
                ->setAttrCharset('UTF-8'));

        $table = Tags::table();//define table
        // table to center, and border color
        $table->setAttrStyle("width:70%;margin-left:15%;margin-right:15%;border-color:yellow");
        $table->setAttrBorder(1);//setting a border size

        //making a row with headers
        $tr1 = Tags::tr();//defines a table row
        for($i = 0; $i <= 10; $i++) {
            $tr1->addTag(Tags::td(2)
                ->setAttrStyle("text-align:center")
                ->addTag(Tags::b(3, $i==0 ? "X" : $i))//tag <b> width value
            );//cell to table row
        }
    $table->addTag($tr1);//the first row to the table

        for($i = 1; $i <= 10; $i++) {
            $td = Tags::td(2);
            $td->setAttrStyle("text-align:center");//style="text-align:center"
            $td->addTag(Tags::b(3,$i));
            $tr = Tags::tr()->addTag($td);//the first cell is a header of column
            for($j = 1; $j <= 10; $j++) {
                $tr->addTag(Tags::td(3, $i*$j)//other cells get a multiplication value
                    ->setAttrColspan(1)//colspan="1"
                    ->setAttrStyle("text-align:center")//style="text-align:center"				  
                );//cell to table row
            }
            $table->addTag($tr);//row to table
        }

        $body = Tags::body(2)->addTag(Tags::h1(2,"Multiplication table")//page's header
                ->setAttrStyle("text-align:center")
            )->addTag($table) //multiplication's table
            //setting style of body
            ->setAttrStyle("background-color:green;color:yellow;");

        // the main tag html and the sole echo
        echo Tags::html(2,$head)
            ->setAttrXmlns('http://www.w3.org/1999/xhtml')
            ->addTag($body);
    ?>

Result: View source in your browser

Files of HTML5Renderer
----------------------

    HTML5Renderer
      |lib
      |  |core ---
      |  |  |eventAndGlobalAttributes.php --- all methots for event- and global attributes
      |  |  |eventAttributes.php --- all methots for event attributes
      |  |  |globalAttributes.php --- all methots for global attributes
      |  |  |renderer.php --- this is a "engine" of the renderer
      |  |  |rendererValidators.php --- methots for checking correctness of attributes' values
      |  |tags   --- all tags have own files
      |  |  |a.php
      |  |  |abbr.php
         .....
      |  |  |wbr.php
      |  |README.txt --- this file
      |  |rendererConf.php --- configurating to showing errors and setting alignment
      |  |tags.php --- including all files in the renderer
    index.php
    conf.php
