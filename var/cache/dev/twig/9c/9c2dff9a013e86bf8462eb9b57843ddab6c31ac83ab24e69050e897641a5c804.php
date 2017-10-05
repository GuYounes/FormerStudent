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
        $__internal_e46f6961550ecbd770b0190a7110cd85b526836bd9153118681db9c1572fdfb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e46f6961550ecbd770b0190a7110cd85b526836bd9153118681db9c1572fdfb1->enter($__internal_e46f6961550ecbd770b0190a7110cd85b526836bd9153118681db9c1572fdfb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c4b7806f828ecc2afbb5e774da0b5f53c822bbafe67b933d0c0373e7e5411f1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b7806f828ecc2afbb5e774da0b5f53c822bbafe67b933d0c0373e7e5411f1c->enter($__internal_c4b7806f828ecc2afbb5e774da0b5f53c822bbafe67b933d0c0373e7e5411f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e46f6961550ecbd770b0190a7110cd85b526836bd9153118681db9c1572fdfb1->leave($__internal_e46f6961550ecbd770b0190a7110cd85b526836bd9153118681db9c1572fdfb1_prof);

        
        $__internal_c4b7806f828ecc2afbb5e774da0b5f53c822bbafe67b933d0c0373e7e5411f1c->leave($__internal_c4b7806f828ecc2afbb5e774da0b5f53c822bbafe67b933d0c0373e7e5411f1c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9ac7f1ba9f6975c40dc56fd1f96a6f02d0548318e7ae3df38629fac973b7ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ac7f1ba9f6975c40dc56fd1f96a6f02d0548318e7ae3df38629fac973b7ac0->enter($__internal_e9ac7f1ba9f6975c40dc56fd1f96a6f02d0548318e7ae3df38629fac973b7ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2bb1601e0852338e5a89f9352c8bed6f6c2539acbc9952a6efa2dc3405dd81c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb1601e0852338e5a89f9352c8bed6f6c2539acbc9952a6efa2dc3405dd81c0->enter($__internal_2bb1601e0852338e5a89f9352c8bed6f6c2539acbc9952a6efa2dc3405dd81c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2bb1601e0852338e5a89f9352c8bed6f6c2539acbc9952a6efa2dc3405dd81c0->leave($__internal_2bb1601e0852338e5a89f9352c8bed6f6c2539acbc9952a6efa2dc3405dd81c0_prof);

        
        $__internal_e9ac7f1ba9f6975c40dc56fd1f96a6f02d0548318e7ae3df38629fac973b7ac0->leave($__internal_e9ac7f1ba9f6975c40dc56fd1f96a6f02d0548318e7ae3df38629fac973b7ac0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe3315443a377e1b3865ce0354d00c95de4957f4ed0b9501fa745bf649094a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe3315443a377e1b3865ce0354d00c95de4957f4ed0b9501fa745bf649094a0e->enter($__internal_fe3315443a377e1b3865ce0354d00c95de4957f4ed0b9501fa745bf649094a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d9169c8a3126085fda0ec2a28134abea1baef36208dcac08f9eb39a4a0e44cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9169c8a3126085fda0ec2a28134abea1baef36208dcac08f9eb39a4a0e44cbb->enter($__internal_d9169c8a3126085fda0ec2a28134abea1baef36208dcac08f9eb39a4a0e44cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d9169c8a3126085fda0ec2a28134abea1baef36208dcac08f9eb39a4a0e44cbb->leave($__internal_d9169c8a3126085fda0ec2a28134abea1baef36208dcac08f9eb39a4a0e44cbb_prof);

        
        $__internal_fe3315443a377e1b3865ce0354d00c95de4957f4ed0b9501fa745bf649094a0e->leave($__internal_fe3315443a377e1b3865ce0354d00c95de4957f4ed0b9501fa745bf649094a0e_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\Symfony\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
