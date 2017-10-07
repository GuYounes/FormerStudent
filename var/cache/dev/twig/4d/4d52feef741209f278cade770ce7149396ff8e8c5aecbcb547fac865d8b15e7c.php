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
        $__internal_77ed9760fdcaa7d07c1b42d09c48e2a876b78db07ef8ef56840b0ebe26cafdd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77ed9760fdcaa7d07c1b42d09c48e2a876b78db07ef8ef56840b0ebe26cafdd9->enter($__internal_77ed9760fdcaa7d07c1b42d09c48e2a876b78db07ef8ef56840b0ebe26cafdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_8c85362e0bff33aa14a7c5c0c8770fa59bbe41e8643012218e02194397315801 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c85362e0bff33aa14a7c5c0c8770fa59bbe41e8643012218e02194397315801->enter($__internal_8c85362e0bff33aa14a7c5c0c8770fa59bbe41e8643012218e02194397315801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77ed9760fdcaa7d07c1b42d09c48e2a876b78db07ef8ef56840b0ebe26cafdd9->leave($__internal_77ed9760fdcaa7d07c1b42d09c48e2a876b78db07ef8ef56840b0ebe26cafdd9_prof);

        
        $__internal_8c85362e0bff33aa14a7c5c0c8770fa59bbe41e8643012218e02194397315801->leave($__internal_8c85362e0bff33aa14a7c5c0c8770fa59bbe41e8643012218e02194397315801_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_6e29474f15b6bafc9a18772e9e397faf117599d20c30de1de0672f623d7a8de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e29474f15b6bafc9a18772e9e397faf117599d20c30de1de0672f623d7a8de5->enter($__internal_6e29474f15b6bafc9a18772e9e397faf117599d20c30de1de0672f623d7a8de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_d5191ce8fb051cc1bf6815e3a92b497ce6974c47f78fe9cfc37d74c5dcd1c902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5191ce8fb051cc1bf6815e3a92b497ce6974c47f78fe9cfc37d74c5dcd1c902->enter($__internal_d5191ce8fb051cc1bf6815e3a92b497ce6974c47f78fe9cfc37d74c5dcd1c902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_d5191ce8fb051cc1bf6815e3a92b497ce6974c47f78fe9cfc37d74c5dcd1c902->leave($__internal_d5191ce8fb051cc1bf6815e3a92b497ce6974c47f78fe9cfc37d74c5dcd1c902_prof);

        
        $__internal_6e29474f15b6bafc9a18772e9e397faf117599d20c30de1de0672f623d7a8de5->leave($__internal_6e29474f15b6bafc9a18772e9e397faf117599d20c30de1de0672f623d7a8de5_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2edc8020a0685b6a32de3dfe1037eb09e5b0363bee2cd8cfdcdbcb14a33aa9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2edc8020a0685b6a32de3dfe1037eb09e5b0363bee2cd8cfdcdbcb14a33aa9db->enter($__internal_2edc8020a0685b6a32de3dfe1037eb09e5b0363bee2cd8cfdcdbcb14a33aa9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_829ace63a906e3f82c85218b9a3db120a4affa7ca92917639c43f394f8d07427 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829ace63a906e3f82c85218b9a3db120a4affa7ca92917639c43f394f8d07427->enter($__internal_829ace63a906e3f82c85218b9a3db120a4affa7ca92917639c43f394f8d07427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_829ace63a906e3f82c85218b9a3db120a4affa7ca92917639c43f394f8d07427->leave($__internal_829ace63a906e3f82c85218b9a3db120a4affa7ca92917639c43f394f8d07427_prof);

        
        $__internal_2edc8020a0685b6a32de3dfe1037eb09e5b0363bee2cd8cfdcdbcb14a33aa9db->leave($__internal_2edc8020a0685b6a32de3dfe1037eb09e5b0363bee2cd8cfdcdbcb14a33aa9db_prof);

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
