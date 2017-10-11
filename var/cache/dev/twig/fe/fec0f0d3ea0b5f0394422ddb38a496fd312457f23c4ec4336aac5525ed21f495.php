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
        $__internal_91599609808c01c73cd6a03bd0d462f11e0afce1d2c9a9214725440209a4bf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91599609808c01c73cd6a03bd0d462f11e0afce1d2c9a9214725440209a4bf86->enter($__internal_91599609808c01c73cd6a03bd0d462f11e0afce1d2c9a9214725440209a4bf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_2c781bf0769a6ed4eb31be509a77bcab3217ee28d738f7977224a405ef1aa72c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c781bf0769a6ed4eb31be509a77bcab3217ee28d738f7977224a405ef1aa72c->enter($__internal_2c781bf0769a6ed4eb31be509a77bcab3217ee28d738f7977224a405ef1aa72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_91599609808c01c73cd6a03bd0d462f11e0afce1d2c9a9214725440209a4bf86->leave($__internal_91599609808c01c73cd6a03bd0d462f11e0afce1d2c9a9214725440209a4bf86_prof);

        
        $__internal_2c781bf0769a6ed4eb31be509a77bcab3217ee28d738f7977224a405ef1aa72c->leave($__internal_2c781bf0769a6ed4eb31be509a77bcab3217ee28d738f7977224a405ef1aa72c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3445255528743d2c11f5fa91f5593dadb5293035f1cc87056e82b430c51a70d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3445255528743d2c11f5fa91f5593dadb5293035f1cc87056e82b430c51a70d8->enter($__internal_3445255528743d2c11f5fa91f5593dadb5293035f1cc87056e82b430c51a70d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae4575da1f968ed5f14b1499621b93b2848c4662378fff85af37c6c203ef2ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4575da1f968ed5f14b1499621b93b2848c4662378fff85af37c6c203ef2ac7->enter($__internal_ae4575da1f968ed5f14b1499621b93b2848c4662378fff85af37c6c203ef2ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ae4575da1f968ed5f14b1499621b93b2848c4662378fff85af37c6c203ef2ac7->leave($__internal_ae4575da1f968ed5f14b1499621b93b2848c4662378fff85af37c6c203ef2ac7_prof);

        
        $__internal_3445255528743d2c11f5fa91f5593dadb5293035f1cc87056e82b430c51a70d8->leave($__internal_3445255528743d2c11f5fa91f5593dadb5293035f1cc87056e82b430c51a70d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e611680e2bca7463defb4fe8934d617db931b2e58e13e55296dbdbb8e0d864e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e611680e2bca7463defb4fe8934d617db931b2e58e13e55296dbdbb8e0d864e->enter($__internal_2e611680e2bca7463defb4fe8934d617db931b2e58e13e55296dbdbb8e0d864e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c135090146d86228d09218e6846a9819d66a7ded6d64157ededaac07ef857739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c135090146d86228d09218e6846a9819d66a7ded6d64157ededaac07ef857739->enter($__internal_c135090146d86228d09218e6846a9819d66a7ded6d64157ededaac07ef857739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c135090146d86228d09218e6846a9819d66a7ded6d64157ededaac07ef857739->leave($__internal_c135090146d86228d09218e6846a9819d66a7ded6d64157ededaac07ef857739_prof);

        
        $__internal_2e611680e2bca7463defb4fe8934d617db931b2e58e13e55296dbdbb8e0d864e->leave($__internal_2e611680e2bca7463defb4fe8934d617db931b2e58e13e55296dbdbb8e0d864e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9aa5cc3ce0ee4040030cf5b1e8c7d3620d94869cef08aa12d5a1ae062aeca373 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9aa5cc3ce0ee4040030cf5b1e8c7d3620d94869cef08aa12d5a1ae062aeca373->enter($__internal_9aa5cc3ce0ee4040030cf5b1e8c7d3620d94869cef08aa12d5a1ae062aeca373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b4632f0e674af61d022bfce11816ba52b5874759759b5c2d28ea3ef0bc3e888 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b4632f0e674af61d022bfce11816ba52b5874759759b5c2d28ea3ef0bc3e888->enter($__internal_1b4632f0e674af61d022bfce11816ba52b5874759759b5c2d28ea3ef0bc3e888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1b4632f0e674af61d022bfce11816ba52b5874759759b5c2d28ea3ef0bc3e888->leave($__internal_1b4632f0e674af61d022bfce11816ba52b5874759759b5c2d28ea3ef0bc3e888_prof);

        
        $__internal_9aa5cc3ce0ee4040030cf5b1e8c7d3620d94869cef08aa12d5a1ae062aeca373->leave($__internal_9aa5cc3ce0ee4040030cf5b1e8c7d3620d94869cef08aa12d5a1ae062aeca373_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e79f1b2f4695b38b3543389a5552cf6e67e7d2d394581038903f6cd743914e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e79f1b2f4695b38b3543389a5552cf6e67e7d2d394581038903f6cd743914e5->enter($__internal_0e79f1b2f4695b38b3543389a5552cf6e67e7d2d394581038903f6cd743914e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ca339037e179dbfac76718beebc69a9e2b2800f273f316d3ef620cbdae4c2587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca339037e179dbfac76718beebc69a9e2b2800f273f316d3ef620cbdae4c2587->enter($__internal_ca339037e179dbfac76718beebc69a9e2b2800f273f316d3ef620cbdae4c2587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ca339037e179dbfac76718beebc69a9e2b2800f273f316d3ef620cbdae4c2587->leave($__internal_ca339037e179dbfac76718beebc69a9e2b2800f273f316d3ef620cbdae4c2587_prof);

        
        $__internal_0e79f1b2f4695b38b3543389a5552cf6e67e7d2d394581038903f6cd743914e5->leave($__internal_0e79f1b2f4695b38b3543389a5552cf6e67e7d2d394581038903f6cd743914e5_prof);

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
