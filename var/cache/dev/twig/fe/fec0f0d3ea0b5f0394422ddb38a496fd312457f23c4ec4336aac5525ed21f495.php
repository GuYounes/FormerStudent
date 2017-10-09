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
        $__internal_af3377bd40a30ba8d8832217a7e71d5a886643029e8a21eef8a93090d9bca42d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af3377bd40a30ba8d8832217a7e71d5a886643029e8a21eef8a93090d9bca42d->enter($__internal_af3377bd40a30ba8d8832217a7e71d5a886643029e8a21eef8a93090d9bca42d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_7df522ef30ddc2ae203755cd9a3de2784f2efe21202a80376c0cbce98a493de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7df522ef30ddc2ae203755cd9a3de2784f2efe21202a80376c0cbce98a493de5->enter($__internal_7df522ef30ddc2ae203755cd9a3de2784f2efe21202a80376c0cbce98a493de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_af3377bd40a30ba8d8832217a7e71d5a886643029e8a21eef8a93090d9bca42d->leave($__internal_af3377bd40a30ba8d8832217a7e71d5a886643029e8a21eef8a93090d9bca42d_prof);

        
        $__internal_7df522ef30ddc2ae203755cd9a3de2784f2efe21202a80376c0cbce98a493de5->leave($__internal_7df522ef30ddc2ae203755cd9a3de2784f2efe21202a80376c0cbce98a493de5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c27016fbb6a6950d96f83b468367981a7c9d620ad0086bdcf4fe526ba920e623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c27016fbb6a6950d96f83b468367981a7c9d620ad0086bdcf4fe526ba920e623->enter($__internal_c27016fbb6a6950d96f83b468367981a7c9d620ad0086bdcf4fe526ba920e623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_627d8ee177d0897a91d9db0eb80561986e2f1654d9f60bbd68309039c742f1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_627d8ee177d0897a91d9db0eb80561986e2f1654d9f60bbd68309039c742f1e4->enter($__internal_627d8ee177d0897a91d9db0eb80561986e2f1654d9f60bbd68309039c742f1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_627d8ee177d0897a91d9db0eb80561986e2f1654d9f60bbd68309039c742f1e4->leave($__internal_627d8ee177d0897a91d9db0eb80561986e2f1654d9f60bbd68309039c742f1e4_prof);

        
        $__internal_c27016fbb6a6950d96f83b468367981a7c9d620ad0086bdcf4fe526ba920e623->leave($__internal_c27016fbb6a6950d96f83b468367981a7c9d620ad0086bdcf4fe526ba920e623_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_03c9dc75c2a489b00f868685b733ccce01a08c0e8239e17cdffce2ffb42b9ace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03c9dc75c2a489b00f868685b733ccce01a08c0e8239e17cdffce2ffb42b9ace->enter($__internal_03c9dc75c2a489b00f868685b733ccce01a08c0e8239e17cdffce2ffb42b9ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a57f9531ef92ac0fb1a25b6ab3d73b0d71697fd4344571fc1a50642e40656ea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57f9531ef92ac0fb1a25b6ab3d73b0d71697fd4344571fc1a50642e40656ea7->enter($__internal_a57f9531ef92ac0fb1a25b6ab3d73b0d71697fd4344571fc1a50642e40656ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a57f9531ef92ac0fb1a25b6ab3d73b0d71697fd4344571fc1a50642e40656ea7->leave($__internal_a57f9531ef92ac0fb1a25b6ab3d73b0d71697fd4344571fc1a50642e40656ea7_prof);

        
        $__internal_03c9dc75c2a489b00f868685b733ccce01a08c0e8239e17cdffce2ffb42b9ace->leave($__internal_03c9dc75c2a489b00f868685b733ccce01a08c0e8239e17cdffce2ffb42b9ace_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dd5b039cf09caae99707ee3ac817f032af8cd3b61ccf3aa65547228fd1b66219 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd5b039cf09caae99707ee3ac817f032af8cd3b61ccf3aa65547228fd1b66219->enter($__internal_dd5b039cf09caae99707ee3ac817f032af8cd3b61ccf3aa65547228fd1b66219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eaf3a5fc65bd9c2b963cd56bd293e92aff641a30d0a70e8209c84d33710a35c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaf3a5fc65bd9c2b963cd56bd293e92aff641a30d0a70e8209c84d33710a35c6->enter($__internal_eaf3a5fc65bd9c2b963cd56bd293e92aff641a30d0a70e8209c84d33710a35c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eaf3a5fc65bd9c2b963cd56bd293e92aff641a30d0a70e8209c84d33710a35c6->leave($__internal_eaf3a5fc65bd9c2b963cd56bd293e92aff641a30d0a70e8209c84d33710a35c6_prof);

        
        $__internal_dd5b039cf09caae99707ee3ac817f032af8cd3b61ccf3aa65547228fd1b66219->leave($__internal_dd5b039cf09caae99707ee3ac817f032af8cd3b61ccf3aa65547228fd1b66219_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ed3b2deba45b21e5afd8a5d71ecf2b7f78ee9e84b790bfbce7f47a957dc3621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed3b2deba45b21e5afd8a5d71ecf2b7f78ee9e84b790bfbce7f47a957dc3621->enter($__internal_8ed3b2deba45b21e5afd8a5d71ecf2b7f78ee9e84b790bfbce7f47a957dc3621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_068f736eb7e0d3dda109d5575349d37ab7661f806cba3665aaed02c5ac9a77b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068f736eb7e0d3dda109d5575349d37ab7661f806cba3665aaed02c5ac9a77b8->enter($__internal_068f736eb7e0d3dda109d5575349d37ab7661f806cba3665aaed02c5ac9a77b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_068f736eb7e0d3dda109d5575349d37ab7661f806cba3665aaed02c5ac9a77b8->leave($__internal_068f736eb7e0d3dda109d5575349d37ab7661f806cba3665aaed02c5ac9a77b8_prof);

        
        $__internal_8ed3b2deba45b21e5afd8a5d71ecf2b7f78ee9e84b790bfbce7f47a957dc3621->leave($__internal_8ed3b2deba45b21e5afd8a5d71ecf2b7f78ee9e84b790bfbce7f47a957dc3621_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\app\\Resources\\views\\base.html.twig");
    }
}
