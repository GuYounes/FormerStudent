<?php

/* ::base.html.twig */
class __TwigTemplate_d8f51fba8e0b403fadcedc64e8342dc38bb19437028f59ced1876f2caefdb9a6 extends Twig_Template
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
        $__internal_6e2813de31d58f3be5130c9c8a9192018e1742c40f0e5e2dc00cd8e583dfb539 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e2813de31d58f3be5130c9c8a9192018e1742c40f0e5e2dc00cd8e583dfb539->enter($__internal_6e2813de31d58f3be5130c9c8a9192018e1742c40f0e5e2dc00cd8e583dfb539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_9661dffcba92f6fab28e2ba572d7f321b5c95920a8b093a40d2071a47f92024e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9661dffcba92f6fab28e2ba572d7f321b5c95920a8b093a40d2071a47f92024e->enter($__internal_9661dffcba92f6fab28e2ba572d7f321b5c95920a8b093a40d2071a47f92024e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6e2813de31d58f3be5130c9c8a9192018e1742c40f0e5e2dc00cd8e583dfb539->leave($__internal_6e2813de31d58f3be5130c9c8a9192018e1742c40f0e5e2dc00cd8e583dfb539_prof);

        
        $__internal_9661dffcba92f6fab28e2ba572d7f321b5c95920a8b093a40d2071a47f92024e->leave($__internal_9661dffcba92f6fab28e2ba572d7f321b5c95920a8b093a40d2071a47f92024e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c890542c72c82953f78f0e8e67d50bad864ac4c72032daa17608e226e3648aef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c890542c72c82953f78f0e8e67d50bad864ac4c72032daa17608e226e3648aef->enter($__internal_c890542c72c82953f78f0e8e67d50bad864ac4c72032daa17608e226e3648aef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_578f4406fc4d10968fd1c8b797bafbe600a8ad6a4f693675d324b675ee538db9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_578f4406fc4d10968fd1c8b797bafbe600a8ad6a4f693675d324b675ee538db9->enter($__internal_578f4406fc4d10968fd1c8b797bafbe600a8ad6a4f693675d324b675ee538db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_578f4406fc4d10968fd1c8b797bafbe600a8ad6a4f693675d324b675ee538db9->leave($__internal_578f4406fc4d10968fd1c8b797bafbe600a8ad6a4f693675d324b675ee538db9_prof);

        
        $__internal_c890542c72c82953f78f0e8e67d50bad864ac4c72032daa17608e226e3648aef->leave($__internal_c890542c72c82953f78f0e8e67d50bad864ac4c72032daa17608e226e3648aef_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc7b68c8c3ba6ca0a5cb7c5184999223fc43323149ca501813aef9878aca7477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc7b68c8c3ba6ca0a5cb7c5184999223fc43323149ca501813aef9878aca7477->enter($__internal_bc7b68c8c3ba6ca0a5cb7c5184999223fc43323149ca501813aef9878aca7477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_b7ea4bd4f61810ea076af5570ee1da67b5424a7a0d95c2f5425910df6a7259ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7ea4bd4f61810ea076af5570ee1da67b5424a7a0d95c2f5425910df6a7259ad->enter($__internal_b7ea4bd4f61810ea076af5570ee1da67b5424a7a0d95c2f5425910df6a7259ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b7ea4bd4f61810ea076af5570ee1da67b5424a7a0d95c2f5425910df6a7259ad->leave($__internal_b7ea4bd4f61810ea076af5570ee1da67b5424a7a0d95c2f5425910df6a7259ad_prof);

        
        $__internal_bc7b68c8c3ba6ca0a5cb7c5184999223fc43323149ca501813aef9878aca7477->leave($__internal_bc7b68c8c3ba6ca0a5cb7c5184999223fc43323149ca501813aef9878aca7477_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6afaf635a47b7983ec68009bb027ec14d56a8f5af3150aa834e8d3fbb40eb898 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afaf635a47b7983ec68009bb027ec14d56a8f5af3150aa834e8d3fbb40eb898->enter($__internal_6afaf635a47b7983ec68009bb027ec14d56a8f5af3150aa834e8d3fbb40eb898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a9c08af843a1df86ae94e4e46027a007218db4adc27d6d4bfb3921e7a97a2780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9c08af843a1df86ae94e4e46027a007218db4adc27d6d4bfb3921e7a97a2780->enter($__internal_a9c08af843a1df86ae94e4e46027a007218db4adc27d6d4bfb3921e7a97a2780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a9c08af843a1df86ae94e4e46027a007218db4adc27d6d4bfb3921e7a97a2780->leave($__internal_a9c08af843a1df86ae94e4e46027a007218db4adc27d6d4bfb3921e7a97a2780_prof);

        
        $__internal_6afaf635a47b7983ec68009bb027ec14d56a8f5af3150aa834e8d3fbb40eb898->leave($__internal_6afaf635a47b7983ec68009bb027ec14d56a8f5af3150aa834e8d3fbb40eb898_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2641a50a081163c31b26a37af4b6d321f81d5a04e402354e29771be56c0181ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2641a50a081163c31b26a37af4b6d321f81d5a04e402354e29771be56c0181ec->enter($__internal_2641a50a081163c31b26a37af4b6d321f81d5a04e402354e29771be56c0181ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e019d2c63c47287688395c6dfb2237777bc9c8ee80789caf5f3851ef3f0abd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e019d2c63c47287688395c6dfb2237777bc9c8ee80789caf5f3851ef3f0abd77->enter($__internal_e019d2c63c47287688395c6dfb2237777bc9c8ee80789caf5f3851ef3f0abd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e019d2c63c47287688395c6dfb2237777bc9c8ee80789caf5f3851ef3f0abd77->leave($__internal_e019d2c63c47287688395c6dfb2237777bc9c8ee80789caf5f3851ef3f0abd77_prof);

        
        $__internal_2641a50a081163c31b26a37af4b6d321f81d5a04e402354e29771be56c0181ec->leave($__internal_2641a50a081163c31b26a37af4b6d321f81d5a04e402354e29771be56c0181ec_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\app/Resources\\views/base.html.twig");
    }
}
