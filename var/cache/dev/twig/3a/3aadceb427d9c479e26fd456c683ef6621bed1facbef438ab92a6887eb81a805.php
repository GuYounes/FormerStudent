<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_20f23f29e1195775636e6da9569a532c2d9298fa45bc097159b0f8ae6b0ff437 extends Twig_Template
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
        $__internal_39f6309faa64e899f506ccdb177e47f73aa861620c19942e823f1d92451b837b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39f6309faa64e899f506ccdb177e47f73aa861620c19942e823f1d92451b837b->enter($__internal_39f6309faa64e899f506ccdb177e47f73aa861620c19942e823f1d92451b837b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_69bb0d56f102048d84b8bbc011e3f0455ea6c9e7115de0e1e2f8c26f2b697308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bb0d56f102048d84b8bbc011e3f0455ea6c9e7115de0e1e2f8c26f2b697308->enter($__internal_69bb0d56f102048d84b8bbc011e3f0455ea6c9e7115de0e1e2f8c26f2b697308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39f6309faa64e899f506ccdb177e47f73aa861620c19942e823f1d92451b837b->leave($__internal_39f6309faa64e899f506ccdb177e47f73aa861620c19942e823f1d92451b837b_prof);

        
        $__internal_69bb0d56f102048d84b8bbc011e3f0455ea6c9e7115de0e1e2f8c26f2b697308->leave($__internal_69bb0d56f102048d84b8bbc011e3f0455ea6c9e7115de0e1e2f8c26f2b697308_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_af51942a8fba35464b55c2941bed20fb22e385f8f8617cc44eb828b0986b6ef4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af51942a8fba35464b55c2941bed20fb22e385f8f8617cc44eb828b0986b6ef4->enter($__internal_af51942a8fba35464b55c2941bed20fb22e385f8f8617cc44eb828b0986b6ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ecab0ba8bab389728199b3eeb60f0f236bbb5f0aecb58fdd040e6b6186bbff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecab0ba8bab389728199b3eeb60f0f236bbb5f0aecb58fdd040e6b6186bbff1->enter($__internal_5ecab0ba8bab389728199b3eeb60f0f236bbb5f0aecb58fdd040e6b6186bbff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5ecab0ba8bab389728199b3eeb60f0f236bbb5f0aecb58fdd040e6b6186bbff1->leave($__internal_5ecab0ba8bab389728199b3eeb60f0f236bbb5f0aecb58fdd040e6b6186bbff1_prof);

        
        $__internal_af51942a8fba35464b55c2941bed20fb22e385f8f8617cc44eb828b0986b6ef4->leave($__internal_af51942a8fba35464b55c2941bed20fb22e385f8f8617cc44eb828b0986b6ef4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e582978192cea6a9ef10bf2f69e0afbb773932e0e055a2a8e7dfa79628f46713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e582978192cea6a9ef10bf2f69e0afbb773932e0e055a2a8e7dfa79628f46713->enter($__internal_e582978192cea6a9ef10bf2f69e0afbb773932e0e055a2a8e7dfa79628f46713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_792b7f24513a8be146272a0a92407ca21b443ef94587f8766230bf2fbb0de7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_792b7f24513a8be146272a0a92407ca21b443ef94587f8766230bf2fbb0de7a7->enter($__internal_792b7f24513a8be146272a0a92407ca21b443ef94587f8766230bf2fbb0de7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_792b7f24513a8be146272a0a92407ca21b443ef94587f8766230bf2fbb0de7a7->leave($__internal_792b7f24513a8be146272a0a92407ca21b443ef94587f8766230bf2fbb0de7a7_prof);

        
        $__internal_e582978192cea6a9ef10bf2f69e0afbb773932e0e055a2a8e7dfa79628f46713->leave($__internal_e582978192cea6a9ef10bf2f69e0afbb773932e0e055a2a8e7dfa79628f46713_prof);

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
