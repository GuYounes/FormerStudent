<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_97ac3e2457da1f03a14fc71ece1e538546be990d7d2a9329467b1bff51e8a758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa162f2bf34ff38d371cf1dd7478d741d7940d4a249cb57804fc7a00e39f7f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa162f2bf34ff38d371cf1dd7478d741d7940d4a249cb57804fc7a00e39f7f2b->enter($__internal_aa162f2bf34ff38d371cf1dd7478d741d7940d4a249cb57804fc7a00e39f7f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_967f7b0dd6142f49e765b6ed5d0300ab448fad6e0fa9cb0c44b3797ea853a780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_967f7b0dd6142f49e765b6ed5d0300ab448fad6e0fa9cb0c44b3797ea853a780->enter($__internal_967f7b0dd6142f49e765b6ed5d0300ab448fad6e0fa9cb0c44b3797ea853a780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa162f2bf34ff38d371cf1dd7478d741d7940d4a249cb57804fc7a00e39f7f2b->leave($__internal_aa162f2bf34ff38d371cf1dd7478d741d7940d4a249cb57804fc7a00e39f7f2b_prof);

        
        $__internal_967f7b0dd6142f49e765b6ed5d0300ab448fad6e0fa9cb0c44b3797ea853a780->leave($__internal_967f7b0dd6142f49e765b6ed5d0300ab448fad6e0fa9cb0c44b3797ea853a780_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad8a9ca138b43a2493e4fbcad36a8f812667f476099e30a54886f939028b9d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad8a9ca138b43a2493e4fbcad36a8f812667f476099e30a54886f939028b9d76->enter($__internal_ad8a9ca138b43a2493e4fbcad36a8f812667f476099e30a54886f939028b9d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e9b36e3edee7afee29a34b503843622019d0d459f248814eaacbcd7f5003bf5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b36e3edee7afee29a34b503843622019d0d459f248814eaacbcd7f5003bf5a->enter($__internal_e9b36e3edee7afee29a34b503843622019d0d459f248814eaacbcd7f5003bf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e9b36e3edee7afee29a34b503843622019d0d459f248814eaacbcd7f5003bf5a->leave($__internal_e9b36e3edee7afee29a34b503843622019d0d459f248814eaacbcd7f5003bf5a_prof);

        
        $__internal_ad8a9ca138b43a2493e4fbcad36a8f812667f476099e30a54886f939028b9d76->leave($__internal_ad8a9ca138b43a2493e4fbcad36a8f812667f476099e30a54886f939028b9d76_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_88b692c56dcb63d10014ffdd85bd1caa7a08a4596b71bb2d362cade3bbac913d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88b692c56dcb63d10014ffdd85bd1caa7a08a4596b71bb2d362cade3bbac913d->enter($__internal_88b692c56dcb63d10014ffdd85bd1caa7a08a4596b71bb2d362cade3bbac913d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_38ea6ab1ed6205b7167c4e9ea6c27bca64cad10e839dd39da9ea241f1b25b8e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ea6ab1ed6205b7167c4e9ea6c27bca64cad10e839dd39da9ea241f1b25b8e7->enter($__internal_38ea6ab1ed6205b7167c4e9ea6c27bca64cad10e839dd39da9ea241f1b25b8e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_38ea6ab1ed6205b7167c4e9ea6c27bca64cad10e839dd39da9ea241f1b25b8e7->leave($__internal_38ea6ab1ed6205b7167c4e9ea6c27bca64cad10e839dd39da9ea241f1b25b8e7_prof);

        
        $__internal_88b692c56dcb63d10014ffdd85bd1caa7a08a4596b71bb2d362cade3bbac913d->leave($__internal_88b692c56dcb63d10014ffdd85bd1caa7a08a4596b71bb2d362cade3bbac913d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
