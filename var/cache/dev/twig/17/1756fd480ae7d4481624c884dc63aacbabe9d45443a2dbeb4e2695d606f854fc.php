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
        $__internal_a1ea0b650db7250d93f56dc82ec9d991563fd23574971ab1331469fab61e004d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ea0b650db7250d93f56dc82ec9d991563fd23574971ab1331469fab61e004d->enter($__internal_a1ea0b650db7250d93f56dc82ec9d991563fd23574971ab1331469fab61e004d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_4685d6deb9426b87712dd988be81bde9933b9af294903aa571686e653aade271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4685d6deb9426b87712dd988be81bde9933b9af294903aa571686e653aade271->enter($__internal_4685d6deb9426b87712dd988be81bde9933b9af294903aa571686e653aade271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a1ea0b650db7250d93f56dc82ec9d991563fd23574971ab1331469fab61e004d->leave($__internal_a1ea0b650db7250d93f56dc82ec9d991563fd23574971ab1331469fab61e004d_prof);

        
        $__internal_4685d6deb9426b87712dd988be81bde9933b9af294903aa571686e653aade271->leave($__internal_4685d6deb9426b87712dd988be81bde9933b9af294903aa571686e653aade271_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_abb9896042c83763b0617e87e0f93936b67785e0aa19e4484e9632ec7f1d71a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb9896042c83763b0617e87e0f93936b67785e0aa19e4484e9632ec7f1d71a2->enter($__internal_abb9896042c83763b0617e87e0f93936b67785e0aa19e4484e9632ec7f1d71a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ef02415ac6668c4e0a5308ad3f1c92a4b01a8cedb4023cd1ac0d594eb9891ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef02415ac6668c4e0a5308ad3f1c92a4b01a8cedb4023cd1ac0d594eb9891ee->enter($__internal_1ef02415ac6668c4e0a5308ad3f1c92a4b01a8cedb4023cd1ac0d594eb9891ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ef02415ac6668c4e0a5308ad3f1c92a4b01a8cedb4023cd1ac0d594eb9891ee->leave($__internal_1ef02415ac6668c4e0a5308ad3f1c92a4b01a8cedb4023cd1ac0d594eb9891ee_prof);

        
        $__internal_abb9896042c83763b0617e87e0f93936b67785e0aa19e4484e9632ec7f1d71a2->leave($__internal_abb9896042c83763b0617e87e0f93936b67785e0aa19e4484e9632ec7f1d71a2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f1ebc14263890f2937b1aafe18b14f491899e2679ff38719f46481a39944a6dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1ebc14263890f2937b1aafe18b14f491899e2679ff38719f46481a39944a6dd->enter($__internal_f1ebc14263890f2937b1aafe18b14f491899e2679ff38719f46481a39944a6dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3c4f1d3e815cd2b7f7e9062082aed3210d3145e5e6f1d0b839176f2ca2026d83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c4f1d3e815cd2b7f7e9062082aed3210d3145e5e6f1d0b839176f2ca2026d83->enter($__internal_3c4f1d3e815cd2b7f7e9062082aed3210d3145e5e6f1d0b839176f2ca2026d83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3c4f1d3e815cd2b7f7e9062082aed3210d3145e5e6f1d0b839176f2ca2026d83->leave($__internal_3c4f1d3e815cd2b7f7e9062082aed3210d3145e5e6f1d0b839176f2ca2026d83_prof);

        
        $__internal_f1ebc14263890f2937b1aafe18b14f491899e2679ff38719f46481a39944a6dd->leave($__internal_f1ebc14263890f2937b1aafe18b14f491899e2679ff38719f46481a39944a6dd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7546e9269c9a1fd2c881556c9d66715441450ac14d4a9b3f31361fbd007cca6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7546e9269c9a1fd2c881556c9d66715441450ac14d4a9b3f31361fbd007cca6b->enter($__internal_7546e9269c9a1fd2c881556c9d66715441450ac14d4a9b3f31361fbd007cca6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_63719003b7cc4d008f8ed8835bae5e8df8a182de8246a586687148f06446e487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63719003b7cc4d008f8ed8835bae5e8df8a182de8246a586687148f06446e487->enter($__internal_63719003b7cc4d008f8ed8835bae5e8df8a182de8246a586687148f06446e487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63719003b7cc4d008f8ed8835bae5e8df8a182de8246a586687148f06446e487->leave($__internal_63719003b7cc4d008f8ed8835bae5e8df8a182de8246a586687148f06446e487_prof);

        
        $__internal_7546e9269c9a1fd2c881556c9d66715441450ac14d4a9b3f31361fbd007cca6b->leave($__internal_7546e9269c9a1fd2c881556c9d66715441450ac14d4a9b3f31361fbd007cca6b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_098fe70bde913dd7fc32feba08d51db1757eee16f463fa82b993be278c263c58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_098fe70bde913dd7fc32feba08d51db1757eee16f463fa82b993be278c263c58->enter($__internal_098fe70bde913dd7fc32feba08d51db1757eee16f463fa82b993be278c263c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba19736e7217143bf18c7e7b9f6b933c2b8c1c711b1dd26e2c68fd8f27f41966 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba19736e7217143bf18c7e7b9f6b933c2b8c1c711b1dd26e2c68fd8f27f41966->enter($__internal_ba19736e7217143bf18c7e7b9f6b933c2b8c1c711b1dd26e2c68fd8f27f41966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ba19736e7217143bf18c7e7b9f6b933c2b8c1c711b1dd26e2c68fd8f27f41966->leave($__internal_ba19736e7217143bf18c7e7b9f6b933c2b8c1c711b1dd26e2c68fd8f27f41966_prof);

        
        $__internal_098fe70bde913dd7fc32feba08d51db1757eee16f463fa82b993be278c263c58->leave($__internal_098fe70bde913dd7fc32feba08d51db1757eee16f463fa82b993be278c263c58_prof);

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
