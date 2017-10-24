<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0f037a4a7f303c21b3d8dd1d9d69a9e42252b1ec97e52163b457a11e74c0821f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_e93f4d55dfba3b986d6b09a1e56b50c5de282528d417f75467398efdbcd88680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e93f4d55dfba3b986d6b09a1e56b50c5de282528d417f75467398efdbcd88680->enter($__internal_e93f4d55dfba3b986d6b09a1e56b50c5de282528d417f75467398efdbcd88680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_48dd0537f91b37eb449163cb231427d1f95e3a42423e6e61ecfb78106597bf85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48dd0537f91b37eb449163cb231427d1f95e3a42423e6e61ecfb78106597bf85->enter($__internal_48dd0537f91b37eb449163cb231427d1f95e3a42423e6e61ecfb78106597bf85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e93f4d55dfba3b986d6b09a1e56b50c5de282528d417f75467398efdbcd88680->leave($__internal_e93f4d55dfba3b986d6b09a1e56b50c5de282528d417f75467398efdbcd88680_prof);

        
        $__internal_48dd0537f91b37eb449163cb231427d1f95e3a42423e6e61ecfb78106597bf85->leave($__internal_48dd0537f91b37eb449163cb231427d1f95e3a42423e6e61ecfb78106597bf85_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4ce01e82fe9154701cd226beffefd71a645c62246ab61d85dd7053afa21c31ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ce01e82fe9154701cd226beffefd71a645c62246ab61d85dd7053afa21c31ef->enter($__internal_4ce01e82fe9154701cd226beffefd71a645c62246ab61d85dd7053afa21c31ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_732118b2f296e8de81bfb3d50b217bc052954a1b37617b8480b7f036195eaf83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_732118b2f296e8de81bfb3d50b217bc052954a1b37617b8480b7f036195eaf83->enter($__internal_732118b2f296e8de81bfb3d50b217bc052954a1b37617b8480b7f036195eaf83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_732118b2f296e8de81bfb3d50b217bc052954a1b37617b8480b7f036195eaf83->leave($__internal_732118b2f296e8de81bfb3d50b217bc052954a1b37617b8480b7f036195eaf83_prof);

        
        $__internal_4ce01e82fe9154701cd226beffefd71a645c62246ab61d85dd7053afa21c31ef->leave($__internal_4ce01e82fe9154701cd226beffefd71a645c62246ab61d85dd7053afa21c31ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f772e3a8aecb32f98dac597725ee66dfc3c79f0a56ac25b12a748b18870229a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f772e3a8aecb32f98dac597725ee66dfc3c79f0a56ac25b12a748b18870229a->enter($__internal_4f772e3a8aecb32f98dac597725ee66dfc3c79f0a56ac25b12a748b18870229a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a49ef95e2c0b48c9eab0f2f361db0cfc017fc16e0939c050203641f2ae07b6ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a49ef95e2c0b48c9eab0f2f361db0cfc017fc16e0939c050203641f2ae07b6ab->enter($__internal_a49ef95e2c0b48c9eab0f2f361db0cfc017fc16e0939c050203641f2ae07b6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a49ef95e2c0b48c9eab0f2f361db0cfc017fc16e0939c050203641f2ae07b6ab->leave($__internal_a49ef95e2c0b48c9eab0f2f361db0cfc017fc16e0939c050203641f2ae07b6ab_prof);

        
        $__internal_4f772e3a8aecb32f98dac597725ee66dfc3c79f0a56ac25b12a748b18870229a->leave($__internal_4f772e3a8aecb32f98dac597725ee66dfc3c79f0a56ac25b12a748b18870229a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
