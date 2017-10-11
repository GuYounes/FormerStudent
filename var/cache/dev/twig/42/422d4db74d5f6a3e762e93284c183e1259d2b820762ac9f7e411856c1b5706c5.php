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
        $__internal_b439106b0729df5cf0fff11d5a5dacc09be20886d0071e3206fb2271828a9e44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b439106b0729df5cf0fff11d5a5dacc09be20886d0071e3206fb2271828a9e44->enter($__internal_b439106b0729df5cf0fff11d5a5dacc09be20886d0071e3206fb2271828a9e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_81354e7942c63f9f0847600cd3ee7600ff0cf7886b4c116fd21be81e92691149 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81354e7942c63f9f0847600cd3ee7600ff0cf7886b4c116fd21be81e92691149->enter($__internal_81354e7942c63f9f0847600cd3ee7600ff0cf7886b4c116fd21be81e92691149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b439106b0729df5cf0fff11d5a5dacc09be20886d0071e3206fb2271828a9e44->leave($__internal_b439106b0729df5cf0fff11d5a5dacc09be20886d0071e3206fb2271828a9e44_prof);

        
        $__internal_81354e7942c63f9f0847600cd3ee7600ff0cf7886b4c116fd21be81e92691149->leave($__internal_81354e7942c63f9f0847600cd3ee7600ff0cf7886b4c116fd21be81e92691149_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_040ddbc4eb8b7b254bd66db260b208b7b1b7d9ae8ff41f9fe4883a944a7fb45b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040ddbc4eb8b7b254bd66db260b208b7b1b7d9ae8ff41f9fe4883a944a7fb45b->enter($__internal_040ddbc4eb8b7b254bd66db260b208b7b1b7d9ae8ff41f9fe4883a944a7fb45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_f29f342e14730617ac2e11c69a83e0fceb9cfdf0677ad1b51ed9b8d4917e6413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f29f342e14730617ac2e11c69a83e0fceb9cfdf0677ad1b51ed9b8d4917e6413->enter($__internal_f29f342e14730617ac2e11c69a83e0fceb9cfdf0677ad1b51ed9b8d4917e6413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_f29f342e14730617ac2e11c69a83e0fceb9cfdf0677ad1b51ed9b8d4917e6413->leave($__internal_f29f342e14730617ac2e11c69a83e0fceb9cfdf0677ad1b51ed9b8d4917e6413_prof);

        
        $__internal_040ddbc4eb8b7b254bd66db260b208b7b1b7d9ae8ff41f9fe4883a944a7fb45b->leave($__internal_040ddbc4eb8b7b254bd66db260b208b7b1b7d9ae8ff41f9fe4883a944a7fb45b_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3fa9ca421fa2fd6c175dd5d674d20ac0ef1d74a1271527a563b07c8e21fb5ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3fa9ca421fa2fd6c175dd5d674d20ac0ef1d74a1271527a563b07c8e21fb5ce->enter($__internal_f3fa9ca421fa2fd6c175dd5d674d20ac0ef1d74a1271527a563b07c8e21fb5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_663c19058d0a203a9b4445b14fffff906e26c141f7e8aaa197cbf95fa09e7122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663c19058d0a203a9b4445b14fffff906e26c141f7e8aaa197cbf95fa09e7122->enter($__internal_663c19058d0a203a9b4445b14fffff906e26c141f7e8aaa197cbf95fa09e7122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_663c19058d0a203a9b4445b14fffff906e26c141f7e8aaa197cbf95fa09e7122->leave($__internal_663c19058d0a203a9b4445b14fffff906e26c141f7e8aaa197cbf95fa09e7122_prof);

        
        $__internal_f3fa9ca421fa2fd6c175dd5d674d20ac0ef1d74a1271527a563b07c8e21fb5ce->leave($__internal_f3fa9ca421fa2fd6c175dd5d674d20ac0ef1d74a1271527a563b07c8e21fb5ce_prof);

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
