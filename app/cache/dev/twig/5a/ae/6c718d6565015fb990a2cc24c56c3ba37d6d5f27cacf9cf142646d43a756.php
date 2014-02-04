<?php

/* AcmeDemoBundle:Welcome:examples.html.twig */
class __TwigTemplate_5aae6c718d6565015fb990a2cc24c56c3ba37d6d5f27cacf9cf142646d43a756 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle:Welcome:index.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Welcome:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <h1>Index</h1>
    <!-- insert the page content here -->
        <h1>Examples</h1>
        <p>This page contains examples of all the styled elements available as part of this design. Use this page for reference, whilst you build your website.</p>
        <h2>Headings</h2>
        <p>These are the different heading formats:</p>
        <h1>Heading 1</h1>
        <h2>Heading 2</h2>
        <h3>Heading 3</h3>
        <h4>Heading 4</h4>
        <h5>Heading 5</h5>
        <h6>Heading 6</h6>
        <h2>Text</h2>
        <p>The following examples show how the text (within '&lt;p&gt;&lt;/p&gt;' tags) will appear:</p>
        <p><strong>This is an example of bold text</strong></p>
        <p><i>This is an example of italic text</i></p>
        <p><a href=\"#\">This is a hyperlink</a></p>
        <h2>Lists</h2>
        <p>This is an unordered list:</p>
        <ul>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ul>
        <p>This is an ordered list:</p>
        <ol>
          <li>Item 1</li>
          <li>Item 2</li>
          <li>Item 3</li>
          <li>Item 4</li>
        </ol>
        <h2>Images</h2>
\t\t
\t\t
\t\t";
        // line 43
        echo "\t\t
\t\t
\t\t";
        // line 46
        echo "\t\t
\t\t
\t\t
\t\t
\t\t<form action=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("AcmeDemo_ejemplo");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
\t\t\t";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t<input type=\"submit\" />
\t\t\t</form>

\t\t
\t\t
        <p>images can be placed on the left, in the center or on the right:</p>
        <span class=\"left\"><img src=\"style/graphic.png\" alt=\"example graphic\" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum.
        </p>
        <span class=\"center\"><img src=\"style/graphic.png\" alt=\"example graphic\" /></span>
        <span class=\"right\"><img src=\"style/graphic.png\" alt=\"example graphic\" /></span>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
          pariatur.
        </p>
        <h2>Tables</h2>
        <p>Tables should be used to display data and not used for laying out your website:</p>
        <table style=\"width:100%; border-spacing:0;\">
          <tr><th>Item</th><th>Description</th></tr>
          <tr><td>Item 1</td><td>Description of Item 1</td></tr>
          <tr><td>Item 2</td><td>Description of Item 2</td></tr>
          <tr><td>Item 3</td><td>Description of Item 3</td></tr>
          <tr><td>Item 4</td><td>Description of Item 4</td></tr>
        </table>
        <h2>Form Elements</h2>
        <form action=\"#\" method=\"post\">
          <div class=\"form_settings\">
            <p><span>Form field example</span><input type=\"text\" name=\"name\" value=\"\" /></p>
            <p><span>Textarea example</span><textarea rows=\"8\" cols=\"50\" name=\"name\"></textarea></p>
            <p><span>Checkbox example</span><input class=\"checkbox\" type=\"checkbox\" name=\"name\" value=\"\" /></p>
            <p><span>Dropdown list example</span><select id=\"id\" name=\"name\"><option value=\"1\">Example 1</option><option value=\"2\">Example 2</option></select></p>
            <p style=\"padding-top: 15px\"><span>&nbsp;</span><input class=\"submit\" type=\"submit\" name=\"name\" value=\"button\" /></p>
          </div>
        </form>
      </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Welcome:examples.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 51,  78 => 50,  72 => 46,  68 => 43,  31 => 7,  28 => 6,);
    }
}
