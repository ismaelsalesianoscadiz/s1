<?php

/* AcmeDemoBundle:Welcome:index.html.twig */
class __TwigTemplate_31794c46bde25968009ca87b338a3d019a4f406f1778a970c775f7ca2556cb8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
  <title>textured_green</title>
  <meta name=\"description\" content=\"website description\" />
  <meta name=\"keywords\" content=\"website keywords, website keywords\" />
  <meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
  
  
  ";
        // line 12
        echo "  
 
  
  <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/style/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  
   ";
        // line 18
        echo "   
  ";
        // line 20
        echo "</head>

<body>
  <div id=\"main\">
    <div id=\"header\">
      <div id=\"logo\">
        <div id=\"logo_text\">
          <!-- class=\"logo_colour\", allows you to change the colour of the text -->
          <h1><a href=\"index.html\">textured<span class=\"logo_colour\">green</span></a></h1>
          <h2>Simple. Contemporary. Website Template.</h2>
        </div>
      </div>
      <div id=\"menubar\">
        <ul id=\"menu\">
          <!-- put class=\"selected\" in the li tag for the selected page - to highlight which page you're on -->
          <li class=\"selected\"><a href=\"index.html\">Home</a></li>
          <li><a href=\"examples.html\">Examples</a></li>
          <li><a href=\"page.html\">A Page</a></li>
          <li><a href=\"another_page.html\">Another Page</a></li>
          <li><a href=\"contact.html\">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id=\"site_content\">
      <div class=\"sidebar\">
        <!-- insert your sidebar items here -->
        <h3>Latest News</h3>
        <h4>New Website Launched</h4>
        <h5>September 1st, 2013</h5>
        <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href=\"#\">Read more</a></p>
        <p></p>
        <h4>New Website Launched</h4>
        <h5>September 1st, 2013</h5>
        <p>2013 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href=\"#\">Read more</a></p>
        <h3>Useful Links</h3>
        <ul>
          <li><a href=\"#\">link 1</a></li>
          <li><a href=\"#\">link 2</a></li>
          <li><a href=\"#\">link 3</a></li>
          <li><a href=\"#\">link 4</a></li>
        </ul>
        <h3>Search</h3>
        <form method=\"post\" action=\"#\" id=\"search_form\">
          <p>
            <input class=\"search\" type=\"text\" name=\"search_field\" value=\"Enter keywords.....\" />
            <input name=\"search\" type=\"image\" style=\"border: 0; margin: 0 0 -9px 5px;\" src=\"style/search.png\" alt=\"Search\" title=\"Search\" />
          </p>
        </form>
      </div>
    ";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "    <div id=\"footer\">
      Copyright &copy; textured_green | <a href=\"http://validator.w3.org/check?uri=referer\">HTML5</a> | <a href=\"http://jigsaw.w3.org/css-validator/check/referer\">CSS</a> | <a href=\"http://www.html5webtemplates.co.uk\">design from HTML5webtemplates.co.uk</a>
    </div>
  </div>
</body>
</html>
";
    }

    // line 69
    public function block_content($context, array $blocks = array())
    {
        // line 70
        echo "        <!-- insert the page content here -->
        ";
        // line 72
        echo "        <p>This standards compliant, simple, fixed width website template is released as an 'open source' design (under a <a href=\"http://creativecommons.org/licenses/by/3.0\">Creative Commons Attribution 3.0 Licence</a>), which means that you are free to download and use it for anything you want (including modifying and amending it). All I ask is that you leave the 'design from HTML5webtemplates.co.uk' link in the footer of the template, but other than that...</p>
        <p>This template is written entirely in <strong>HTML5</strong> and <strong>CSS</strong>, and can be validated using the links in the footer.</p>
        <p>You can view more free HTML5 web templates <a href=\"http://www.html5webtemplates.co.uk\">here</a>.</p>
        <p>This template is a fully functional 5 page website, with an <a href=\"examples.html\">examples</a> page that gives examples of all the styles available with this design.</p>
        <h2>Browser Compatibility</h2>
        <p>This template has been tested in the following browsers:</p>
        <ul>
          <li>Internet Explorer 8</li>
          <li>Internet Explorer 7</li>
          <li>FireFox 3.5</li>
          <li>Google Chrome 6</li>
        </ul>
      </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 72,  111 => 70,  108 => 69,  98 => 86,  96 => 69,  45 => 20,  42 => 18,  37 => 15,  32 => 12,  20 => 1,);
    }
}
