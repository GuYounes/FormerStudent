<?php

/* @FormerDUTStudents/Emails/stylesheets/email.css */
class __TwigTemplate_ad6ea6ebbb0765a9b0e1896ea8de9719c9a4a4cc2b0a74a11d27ad2c7610e6ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/* ------------------------------------- 
\t\tGLOBAL 
------------------------------------- */
* { 
\tmargin:0;
\tpadding:0;
}
* { font-family: \"Helvetica Neue\", \"Helvetica\", Helvetica, Arial, sans-serif; }

img { 
\tmax-width: 100%; 
}
.collapse {
\tmargin:0;
\tpadding:0;
}
body {
\t-webkit-font-smoothing:antialiased; 
\t-webkit-text-size-adjust:none; 
\twidth: 100%!important; 
\theight: 100%;
}


/* ------------------------------------- 
\t\tELEMENTS 
------------------------------------- */
a { color: #2BA6CB;}

.btn {
\ttext-decoration:none;
\tcolor: #FFF;
\tbackground-color: #666;
\tpadding:10px 16px;
\tfont-weight:bold;
\tmargin-right:10px;
\ttext-align:center;
\tcursor:pointer;
\tdisplay: inline-block;
}

p.callout {
\tpadding:15px;
\tbackground-color:#ECF8FF;
\tmargin-bottom: 15px;
}
.callout a {
\tfont-weight:bold;
\tcolor: #2BA6CB;
}

table.social {
/* \tpadding:15px; */
\tbackground-color: #ebebeb;
\t
}
.social .soc-btn {
\tpadding: 3px 7px;
\tfont-size:12px;
\tmargin-bottom:10px;
\ttext-decoration:none;
\tcolor: #FFF;font-weight:bold;
\tdisplay:block;
\ttext-align:center;
}
a.fb { background-color: #3B5998!important; }
a.tw { background-color: #1daced!important; }
a.gp { background-color: #DB4A39!important; }
a.ms { background-color: #000!important; }

.sidebar .soc-btn { 
\tdisplay:block;
\twidth:100%;
}

/* ------------------------------------- 
\t\tHEADER 
------------------------------------- */
table.head-wrap { width: 100%;}

.header.container table td.logo { padding: 15px; }
.header.container table td.label { padding: 15px; padding-left:0px;}


/* ------------------------------------- 
\t\tBODY 
------------------------------------- */
table.body-wrap { width: 100%;}


/* ------------------------------------- 
\t\tFOOTER 
------------------------------------- */
table.footer-wrap { width: 100%;\tclear:both!important;
}
.footer-wrap .container td.content  p { border-top: 1px solid rgb(215,215,215); padding-top:15px;}
.footer-wrap .container td.content p {
\tfont-size:10px;
\tfont-weight: bold;
\t
}


/* ------------------------------------- 
\t\tTYPOGRAPHY 
------------------------------------- */
h1,h2,h3,h4,h5,h6 {
font-family: \"HelveticaNeue-Light\", \"Helvetica Neue Light\", \"Helvetica Neue\", Helvetica, Arial, \"Lucida Grande\", sans-serif; line-height: 1.1; margin-bottom:15px; color:#000;
}
h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { font-size: 60%; color: #6f6f6f; line-height: 0; text-transform: none; }

h1 { font-weight:200; font-size: 44px;}
h2 { font-weight:200; font-size: 37px;}
h3 { font-weight:500; font-size: 27px;}
h4 { font-weight:500; font-size: 23px;}
h5 { font-weight:900; font-size: 17px;}
h6 { font-weight:900; font-size: 14px; text-transform: uppercase; color:#444;}

.collapse { margin:0!important;}

p, ul { 
\tmargin-bottom: 10px; 
\tfont-weight: normal; 
\tfont-size:14px; 
\tline-height:1.6;
}
p.lead { font-size:17px; }
p.last { margin-bottom:0px;}

ul li {
\tmargin-left:5px;
\tlist-style-position: inside;
}

/* ------------------------------------- 
\t\tSIDEBAR 
------------------------------------- */
ul.sidebar {
\tbackground:#ebebeb;
\tdisplay:block;
\tlist-style-type: none;
}
ul.sidebar li { display: block; margin:0;}
ul.sidebar li a {
\ttext-decoration:none;
\tcolor: #666;
\tpadding:10px 16px;
/* \tfont-weight:bold; */
\tmargin-right:10px;
/* \ttext-align:center; */
\tcursor:pointer;
\tborder-bottom: 1px solid #777777;
\tborder-top: 1px solid #FFFFFF;
\tdisplay:block;
\tmargin:0;
}
ul.sidebar li a.last { border-bottom-width:0px;}
ul.sidebar li a h1,ul.sidebar li a h2,ul.sidebar li a h3,ul.sidebar li a h4,ul.sidebar li a h5,ul.sidebar li a h6,ul.sidebar li a p { margin-bottom:0!important;}



/* --------------------------------------------------- 
\t\tRESPONSIVENESS
\t\tNuke it from orbit. It's the only way to be sure. 
------------------------------------------------------ */

/* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
.container {
\tdisplay:block!important;
\tmax-width:600px!important;
\tmargin:0 auto!important; /* makes it centered */
\tclear:both!important;
}

/* This should also be a block element, so that it will fill 100% of the .container */
.content {
\tpadding:15px;
\tmax-width:600px;
\tmargin:0 auto;
\tdisplay:block; 
}

/* Let's make sure tables in the content area are 100% wide */
.content table { width: 100%; }


/* Odds and ends */
.column {
\twidth: 300px;
\tfloat:left;
}
.column tr td { padding: 15px; }
.column-wrap { 
\tpadding:0!important; 
\tmargin:0 auto; 
\tmax-width:600px!important;
}
.column table { width:100%;}
.social .column {
\twidth: 280px;
\tmin-width: 279px;
\tfloat:left;
}

/* Be sure to place a .clear element after each set of columns, just to be safe */
.clear { display: block; clear: both; }


/* ------------------------------------------- 
\t\tPHONE
\t\tFor clients that support media queries.
\t\tNothing fancy. 
-------------------------------------------- */
@media only screen and (max-width: 600px) {
\t
\ta[class=\"btn\"] { display:block!important; margin-bottom:10px!important; background-image:none!important; margin-right:0!important;}

\tdiv[class=\"column\"] { width: auto!important; float:none!important;}
\t
\ttable.social div[class=\"column\"] {
\t\twidth:auto!important;
\t}

}";
    }

    public function getTemplateName()
    {
        return "@FormerDUTStudents/Emails/stylesheets/email.css";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@FormerDUTStudents/Emails/stylesheets/email.css", "C:\\xampp\\htdocs\\FormerDUTStudents\\src\\FormerDUTStudentsBundle\\Resources\\views\\Emails\\stylesheets\\email.css");
    }
}
