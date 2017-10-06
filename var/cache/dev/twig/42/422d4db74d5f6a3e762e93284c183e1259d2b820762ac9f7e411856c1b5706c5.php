<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fe0034cb3f9dd2f03525bb825002831a0dabff6281fb48153046936a4f6459e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e850bd19287b7d3188914f766b55ed4b9ad67cc2364e9ab7eaf7d46c244dddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e850bd19287b7d3188914f766b55ed4b9ad67cc2364e9ab7eaf7d46c244dddf->enter($__internal_7e850bd19287b7d3188914f766b55ed4b9ad67cc2364e9ab7eaf7d46c244dddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_8d94ef37ef33858c1968078993e5a94f79f01580f4142ae4d402e1abe685ac28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d94ef37ef33858c1968078993e5a94f79f01580f4142ae4d402e1abe685ac28->enter($__internal_8d94ef37ef33858c1968078993e5a94f79f01580f4142ae4d402e1abe685ac28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e850bd19287b7d3188914f766b55ed4b9ad67cc2364e9ab7eaf7d46c244dddf->leave($__internal_7e850bd19287b7d3188914f766b55ed4b9ad67cc2364e9ab7eaf7d46c244dddf_prof);

        
        $__internal_8d94ef37ef33858c1968078993e5a94f79f01580f4142ae4d402e1abe685ac28->leave($__internal_8d94ef37ef33858c1968078993e5a94f79f01580f4142ae4d402e1abe685ac28_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d04b9f17007750626f8e165c852f62118384c2638b422ee17fe914a4b7e0b56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d04b9f17007750626f8e165c852f62118384c2638b422ee17fe914a4b7e0b56a->enter($__internal_d04b9f17007750626f8e165c852f62118384c2638b422ee17fe914a4b7e0b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_463ba6f7f2d0fa9434bee86c52a2456309ce2958d4ad155de80adb304a4d95a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_463ba6f7f2d0fa9434bee86c52a2456309ce2958d4ad155de80adb304a4d95a8->enter($__internal_463ba6f7f2d0fa9434bee86c52a2456309ce2958d4ad155de80adb304a4d95a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_463ba6f7f2d0fa9434bee86c52a2456309ce2958d4ad155de80adb304a4d95a8->leave($__internal_463ba6f7f2d0fa9434bee86c52a2456309ce2958d4ad155de80adb304a4d95a8_prof);

        
        $__internal_d04b9f17007750626f8e165c852f62118384c2638b422ee17fe914a4b7e0b56a->leave($__internal_d04b9f17007750626f8e165c852f62118384c2638b422ee17fe914a4b7e0b56a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb3f2b833fb1ae382d8041dc7e465c5387ca80877069b71287faee552a887b44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3f2b833fb1ae382d8041dc7e465c5387ca80877069b71287faee552a887b44->enter($__internal_eb3f2b833fb1ae382d8041dc7e465c5387ca80877069b71287faee552a887b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_72257314f566c64646053e86af9accc39004a352b613314824b8fda79e71b105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72257314f566c64646053e86af9accc39004a352b613314824b8fda79e71b105->enter($__internal_72257314f566c64646053e86af9accc39004a352b613314824b8fda79e71b105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_72257314f566c64646053e86af9accc39004a352b613314824b8fda79e71b105->leave($__internal_72257314f566c64646053e86af9accc39004a352b613314824b8fda79e71b105_prof);

        
        $__internal_eb3f2b833fb1ae382d8041dc7e465c5387ca80877069b71287faee552a887b44->leave($__internal_eb3f2b833fb1ae382d8041dc7e465c5387ca80877069b71287faee552a887b44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
