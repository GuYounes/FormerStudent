<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_7189761eadc29ed00b626242fcf30293c4cd501f780ade8f41ff68b1e938394b extends Twig_Template
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
        $__internal_9bdd5d84025fdb5adc014df51b1b817315bd9b5b8dbf9be43c4aab79c90dd92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdd5d84025fdb5adc014df51b1b817315bd9b5b8dbf9be43c4aab79c90dd92b->enter($__internal_9bdd5d84025fdb5adc014df51b1b817315bd9b5b8dbf9be43c4aab79c90dd92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_c2270cc86ad6444bc5b94a67975a076f10d6b56fe145924e6a0b81633eecbf82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2270cc86ad6444bc5b94a67975a076f10d6b56fe145924e6a0b81633eecbf82->enter($__internal_c2270cc86ad6444bc5b94a67975a076f10d6b56fe145924e6a0b81633eecbf82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bdd5d84025fdb5adc014df51b1b817315bd9b5b8dbf9be43c4aab79c90dd92b->leave($__internal_9bdd5d84025fdb5adc014df51b1b817315bd9b5b8dbf9be43c4aab79c90dd92b_prof);

        
        $__internal_c2270cc86ad6444bc5b94a67975a076f10d6b56fe145924e6a0b81633eecbf82->leave($__internal_c2270cc86ad6444bc5b94a67975a076f10d6b56fe145924e6a0b81633eecbf82_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_265e9f871079d56c7b07368595783af3defb73bda383e3186cb36e58e8a26899 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_265e9f871079d56c7b07368595783af3defb73bda383e3186cb36e58e8a26899->enter($__internal_265e9f871079d56c7b07368595783af3defb73bda383e3186cb36e58e8a26899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_9366760e4b2d9aa2a36cf43edbdaf375c644b03fb2f67567e9e55e181e29c47d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9366760e4b2d9aa2a36cf43edbdaf375c644b03fb2f67567e9e55e181e29c47d->enter($__internal_9366760e4b2d9aa2a36cf43edbdaf375c644b03fb2f67567e9e55e181e29c47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_9366760e4b2d9aa2a36cf43edbdaf375c644b03fb2f67567e9e55e181e29c47d->leave($__internal_9366760e4b2d9aa2a36cf43edbdaf375c644b03fb2f67567e9e55e181e29c47d_prof);

        
        $__internal_265e9f871079d56c7b07368595783af3defb73bda383e3186cb36e58e8a26899->leave($__internal_265e9f871079d56c7b07368595783af3defb73bda383e3186cb36e58e8a26899_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e4bb0c1547ed7d8c99404e5bfd71db909fc52a31e69bfdcc8661892ecb52c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e4bb0c1547ed7d8c99404e5bfd71db909fc52a31e69bfdcc8661892ecb52c81->enter($__internal_3e4bb0c1547ed7d8c99404e5bfd71db909fc52a31e69bfdcc8661892ecb52c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70d561be6bd89f80c58317fa7a7c5cce52741db3acbfaf5ab76ab7966b1f04a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70d561be6bd89f80c58317fa7a7c5cce52741db3acbfaf5ab76ab7966b1f04a2->enter($__internal_70d561be6bd89f80c58317fa7a7c5cce52741db3acbfaf5ab76ab7966b1f04a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_70d561be6bd89f80c58317fa7a7c5cce52741db3acbfaf5ab76ab7966b1f04a2->leave($__internal_70d561be6bd89f80c58317fa7a7c5cce52741db3acbfaf5ab76ab7966b1f04a2_prof);

        
        $__internal_3e4bb0c1547ed7d8c99404e5bfd71db909fc52a31e69bfdcc8661892ecb52c81->leave($__internal_3e4bb0c1547ed7d8c99404e5bfd71db909fc52a31e69bfdcc8661892ecb52c81_prof);

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
