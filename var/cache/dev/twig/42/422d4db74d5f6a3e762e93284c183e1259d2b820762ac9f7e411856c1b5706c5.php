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
        $__internal_7c573fc0d3a1ab623fa5b3076c90b4f24e3fc48156492d9741d3405f035fb1cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c573fc0d3a1ab623fa5b3076c90b4f24e3fc48156492d9741d3405f035fb1cf->enter($__internal_7c573fc0d3a1ab623fa5b3076c90b4f24e3fc48156492d9741d3405f035fb1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a47f42ac49f92e484127c034c114882b78810a07c71b29b22067db17d0e41814 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47f42ac49f92e484127c034c114882b78810a07c71b29b22067db17d0e41814->enter($__internal_a47f42ac49f92e484127c034c114882b78810a07c71b29b22067db17d0e41814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c573fc0d3a1ab623fa5b3076c90b4f24e3fc48156492d9741d3405f035fb1cf->leave($__internal_7c573fc0d3a1ab623fa5b3076c90b4f24e3fc48156492d9741d3405f035fb1cf_prof);

        
        $__internal_a47f42ac49f92e484127c034c114882b78810a07c71b29b22067db17d0e41814->leave($__internal_a47f42ac49f92e484127c034c114882b78810a07c71b29b22067db17d0e41814_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a9da13c0ec2848ccfffb5505645432840f8519b216cb144d73b8e16fa111e74a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9da13c0ec2848ccfffb5505645432840f8519b216cb144d73b8e16fa111e74a->enter($__internal_a9da13c0ec2848ccfffb5505645432840f8519b216cb144d73b8e16fa111e74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_cdd56eadb4251835b318984b3d8f0293fd1c48ae66b09841247cc687dddc2380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdd56eadb4251835b318984b3d8f0293fd1c48ae66b09841247cc687dddc2380->enter($__internal_cdd56eadb4251835b318984b3d8f0293fd1c48ae66b09841247cc687dddc2380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_cdd56eadb4251835b318984b3d8f0293fd1c48ae66b09841247cc687dddc2380->leave($__internal_cdd56eadb4251835b318984b3d8f0293fd1c48ae66b09841247cc687dddc2380_prof);

        
        $__internal_a9da13c0ec2848ccfffb5505645432840f8519b216cb144d73b8e16fa111e74a->leave($__internal_a9da13c0ec2848ccfffb5505645432840f8519b216cb144d73b8e16fa111e74a_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_930578c8efa3f79b2739ef1f7726bd397d3c4d849bc298b7eea792476cf048a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930578c8efa3f79b2739ef1f7726bd397d3c4d849bc298b7eea792476cf048a7->enter($__internal_930578c8efa3f79b2739ef1f7726bd397d3c4d849bc298b7eea792476cf048a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ba8fdc6c3a01069c19376771c32a86ba6c467acb84633bb2889e82fde6f546d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8fdc6c3a01069c19376771c32a86ba6c467acb84633bb2889e82fde6f546d0->enter($__internal_ba8fdc6c3a01069c19376771c32a86ba6c467acb84633bb2889e82fde6f546d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ba8fdc6c3a01069c19376771c32a86ba6c467acb84633bb2889e82fde6f546d0->leave($__internal_ba8fdc6c3a01069c19376771c32a86ba6c467acb84633bb2889e82fde6f546d0_prof);

        
        $__internal_930578c8efa3f79b2739ef1f7726bd397d3c4d849bc298b7eea792476cf048a7->leave($__internal_930578c8efa3f79b2739ef1f7726bd397d3c4d849bc298b7eea792476cf048a7_prof);

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
