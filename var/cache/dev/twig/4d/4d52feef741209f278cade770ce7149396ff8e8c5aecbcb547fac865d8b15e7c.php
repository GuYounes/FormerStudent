<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_194482d9950a10f4d2fd80cae44702698fad7f6a824d712699e203a16bbdeea6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_c370eeb023585b100775c7593685b158295ca9b4f56241e4729fac6a78f52d39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c370eeb023585b100775c7593685b158295ca9b4f56241e4729fac6a78f52d39->enter($__internal_c370eeb023585b100775c7593685b158295ca9b4f56241e4729fac6a78f52d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_30faa1a64a77f2dad3cf24551aab44da68b5ef1f8805d0f13ff6ad6935fba3c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30faa1a64a77f2dad3cf24551aab44da68b5ef1f8805d0f13ff6ad6935fba3c3->enter($__internal_30faa1a64a77f2dad3cf24551aab44da68b5ef1f8805d0f13ff6ad6935fba3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c370eeb023585b100775c7593685b158295ca9b4f56241e4729fac6a78f52d39->leave($__internal_c370eeb023585b100775c7593685b158295ca9b4f56241e4729fac6a78f52d39_prof);

        
        $__internal_30faa1a64a77f2dad3cf24551aab44da68b5ef1f8805d0f13ff6ad6935fba3c3->leave($__internal_30faa1a64a77f2dad3cf24551aab44da68b5ef1f8805d0f13ff6ad6935fba3c3_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7fd26b18a1f8913630f30677daafecc879b28014036913bb167fcdfd61a60364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd26b18a1f8913630f30677daafecc879b28014036913bb167fcdfd61a60364->enter($__internal_7fd26b18a1f8913630f30677daafecc879b28014036913bb167fcdfd61a60364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_923fea02bd29def883413bd31ef128f84ab22f369181719e4bb09222cb8ac4df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_923fea02bd29def883413bd31ef128f84ab22f369181719e4bb09222cb8ac4df->enter($__internal_923fea02bd29def883413bd31ef128f84ab22f369181719e4bb09222cb8ac4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_923fea02bd29def883413bd31ef128f84ab22f369181719e4bb09222cb8ac4df->leave($__internal_923fea02bd29def883413bd31ef128f84ab22f369181719e4bb09222cb8ac4df_prof);

        
        $__internal_7fd26b18a1f8913630f30677daafecc879b28014036913bb167fcdfd61a60364->leave($__internal_7fd26b18a1f8913630f30677daafecc879b28014036913bb167fcdfd61a60364_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e91ce09ef50a4e7f8758b1d5ec1b366eeea669fe0f36f3b19a2d29893534cc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e91ce09ef50a4e7f8758b1d5ec1b366eeea669fe0f36f3b19a2d29893534cc9->enter($__internal_1e91ce09ef50a4e7f8758b1d5ec1b366eeea669fe0f36f3b19a2d29893534cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c1de29cb1382c2c328d4d156952477d059009bfbc44e1dbdd1b3ad31835ed0fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1de29cb1382c2c328d4d156952477d059009bfbc44e1dbdd1b3ad31835ed0fa->enter($__internal_c1de29cb1382c2c328d4d156952477d059009bfbc44e1dbdd1b3ad31835ed0fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c1de29cb1382c2c328d4d156952477d059009bfbc44e1dbdd1b3ad31835ed0fa->leave($__internal_c1de29cb1382c2c328d4d156952477d059009bfbc44e1dbdd1b3ad31835ed0fa_prof);

        
        $__internal_1e91ce09ef50a4e7f8758b1d5ec1b366eeea669fe0f36f3b19a2d29893534cc9->leave($__internal_1e91ce09ef50a4e7f8758b1d5ec1b366eeea669fe0f36f3b19a2d29893534cc9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
