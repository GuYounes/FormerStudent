<?php

/* base.html.twig */
class __TwigTemplate_8f7ed79b096fe6e3f110f36f49a6743b2a52208b16b91984b4ebd26a00a0735c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5615b5e5305a119c00a2f7aacd9a3a3d3051aa55b3d183957705ce6d699707c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5615b5e5305a119c00a2f7aacd9a3a3d3051aa55b3d183957705ce6d699707c1->enter($__internal_5615b5e5305a119c00a2f7aacd9a3a3d3051aa55b3d183957705ce6d699707c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7ca5db59352ebee7cc83b16f8a34b1d14a5dff55dda6ef47c8f8127546065c47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ca5db59352ebee7cc83b16f8a34b1d14a5dff55dda6ef47c8f8127546065c47->enter($__internal_7ca5db59352ebee7cc83b16f8a34b1d14a5dff55dda6ef47c8f8127546065c47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5615b5e5305a119c00a2f7aacd9a3a3d3051aa55b3d183957705ce6d699707c1->leave($__internal_5615b5e5305a119c00a2f7aacd9a3a3d3051aa55b3d183957705ce6d699707c1_prof);

        
        $__internal_7ca5db59352ebee7cc83b16f8a34b1d14a5dff55dda6ef47c8f8127546065c47->leave($__internal_7ca5db59352ebee7cc83b16f8a34b1d14a5dff55dda6ef47c8f8127546065c47_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_849cb9eeb9480ec8556918b65ac23eed490000212f74a2c6f212cd4241f16625 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_849cb9eeb9480ec8556918b65ac23eed490000212f74a2c6f212cd4241f16625->enter($__internal_849cb9eeb9480ec8556918b65ac23eed490000212f74a2c6f212cd4241f16625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e2cc31e68e8d69f654552174e746b2cc4bf639338f96522037139395df7f1c17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2cc31e68e8d69f654552174e746b2cc4bf639338f96522037139395df7f1c17->enter($__internal_e2cc31e68e8d69f654552174e746b2cc4bf639338f96522037139395df7f1c17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e2cc31e68e8d69f654552174e746b2cc4bf639338f96522037139395df7f1c17->leave($__internal_e2cc31e68e8d69f654552174e746b2cc4bf639338f96522037139395df7f1c17_prof);

        
        $__internal_849cb9eeb9480ec8556918b65ac23eed490000212f74a2c6f212cd4241f16625->leave($__internal_849cb9eeb9480ec8556918b65ac23eed490000212f74a2c6f212cd4241f16625_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_471dec059461fb6cf11fe9e8f317cf0819267c73a69235c9aec8efca81261620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471dec059461fb6cf11fe9e8f317cf0819267c73a69235c9aec8efca81261620->enter($__internal_471dec059461fb6cf11fe9e8f317cf0819267c73a69235c9aec8efca81261620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6867200d17184088f8cbcf07f2991a732b42a086f01c7ca3212d6f4d869f75fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6867200d17184088f8cbcf07f2991a732b42a086f01c7ca3212d6f4d869f75fe->enter($__internal_6867200d17184088f8cbcf07f2991a732b42a086f01c7ca3212d6f4d869f75fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6867200d17184088f8cbcf07f2991a732b42a086f01c7ca3212d6f4d869f75fe->leave($__internal_6867200d17184088f8cbcf07f2991a732b42a086f01c7ca3212d6f4d869f75fe_prof);

        
        $__internal_471dec059461fb6cf11fe9e8f317cf0819267c73a69235c9aec8efca81261620->leave($__internal_471dec059461fb6cf11fe9e8f317cf0819267c73a69235c9aec8efca81261620_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_24392283336e71a8c76e295a6bc3ce26917bb2ad42d578cd6f170e6893f6aa7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24392283336e71a8c76e295a6bc3ce26917bb2ad42d578cd6f170e6893f6aa7e->enter($__internal_24392283336e71a8c76e295a6bc3ce26917bb2ad42d578cd6f170e6893f6aa7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a7a40783ce3918a94822ce4a9e3df6c58a5a5d8a32cb7a8168e00784d32f80cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a40783ce3918a94822ce4a9e3df6c58a5a5d8a32cb7a8168e00784d32f80cd->enter($__internal_a7a40783ce3918a94822ce4a9e3df6c58a5a5d8a32cb7a8168e00784d32f80cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7a40783ce3918a94822ce4a9e3df6c58a5a5d8a32cb7a8168e00784d32f80cd->leave($__internal_a7a40783ce3918a94822ce4a9e3df6c58a5a5d8a32cb7a8168e00784d32f80cd_prof);

        
        $__internal_24392283336e71a8c76e295a6bc3ce26917bb2ad42d578cd6f170e6893f6aa7e->leave($__internal_24392283336e71a8c76e295a6bc3ce26917bb2ad42d578cd6f170e6893f6aa7e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cf1e78f0aad1543c4fdff547027c478092103032ffbe27709e33eb4236927c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf1e78f0aad1543c4fdff547027c478092103032ffbe27709e33eb4236927c70->enter($__internal_cf1e78f0aad1543c4fdff547027c478092103032ffbe27709e33eb4236927c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_27a7794401ba07e993f0a6adffa8d421f6f173dc2087e77c35440c24aad241fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a7794401ba07e993f0a6adffa8d421f6f173dc2087e77c35440c24aad241fd->enter($__internal_27a7794401ba07e993f0a6adffa8d421f6f173dc2087e77c35440c24aad241fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_27a7794401ba07e993f0a6adffa8d421f6f173dc2087e77c35440c24aad241fd->leave($__internal_27a7794401ba07e993f0a6adffa8d421f6f173dc2087e77c35440c24aad241fd_prof);

        
        $__internal_cf1e78f0aad1543c4fdff547027c478092103032ffbe27709e33eb4236927c70->leave($__internal_cf1e78f0aad1543c4fdff547027c478092103032ffbe27709e33eb4236927c70_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\Symfony\\app\\Resources\\views\\base.html.twig");
    }
}
