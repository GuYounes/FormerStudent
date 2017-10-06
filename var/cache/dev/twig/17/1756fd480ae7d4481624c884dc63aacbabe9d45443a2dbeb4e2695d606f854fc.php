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
        $__internal_50e03296a1ac0fd76f6b9fa9e11b9d6839b69f3c98f2e8bb745a32ed988d00dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e03296a1ac0fd76f6b9fa9e11b9d6839b69f3c98f2e8bb745a32ed988d00dc->enter($__internal_50e03296a1ac0fd76f6b9fa9e11b9d6839b69f3c98f2e8bb745a32ed988d00dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_711d436ba9743286d753cf759fb30fe2e347feaa7f629ea44648562c072643cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_711d436ba9743286d753cf759fb30fe2e347feaa7f629ea44648562c072643cd->enter($__internal_711d436ba9743286d753cf759fb30fe2e347feaa7f629ea44648562c072643cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_50e03296a1ac0fd76f6b9fa9e11b9d6839b69f3c98f2e8bb745a32ed988d00dc->leave($__internal_50e03296a1ac0fd76f6b9fa9e11b9d6839b69f3c98f2e8bb745a32ed988d00dc_prof);

        
        $__internal_711d436ba9743286d753cf759fb30fe2e347feaa7f629ea44648562c072643cd->leave($__internal_711d436ba9743286d753cf759fb30fe2e347feaa7f629ea44648562c072643cd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_549e80ec2203f8ad48f04734912d18d24ecfa92b0e1eddd68c0c182d48ce61d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_549e80ec2203f8ad48f04734912d18d24ecfa92b0e1eddd68c0c182d48ce61d8->enter($__internal_549e80ec2203f8ad48f04734912d18d24ecfa92b0e1eddd68c0c182d48ce61d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b6c34e7ccab91fa4a88cb20c6b118a30727e03aa775200c780fba6f1caaab1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c34e7ccab91fa4a88cb20c6b118a30727e03aa775200c780fba6f1caaab1c8->enter($__internal_b6c34e7ccab91fa4a88cb20c6b118a30727e03aa775200c780fba6f1caaab1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b6c34e7ccab91fa4a88cb20c6b118a30727e03aa775200c780fba6f1caaab1c8->leave($__internal_b6c34e7ccab91fa4a88cb20c6b118a30727e03aa775200c780fba6f1caaab1c8_prof);

        
        $__internal_549e80ec2203f8ad48f04734912d18d24ecfa92b0e1eddd68c0c182d48ce61d8->leave($__internal_549e80ec2203f8ad48f04734912d18d24ecfa92b0e1eddd68c0c182d48ce61d8_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a3cbe5bb58e11bb82dcefd2241340cc8f20658bf2e731816df54f500f41774d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a3cbe5bb58e11bb82dcefd2241340cc8f20658bf2e731816df54f500f41774d->enter($__internal_1a3cbe5bb58e11bb82dcefd2241340cc8f20658bf2e731816df54f500f41774d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6cece61e0334a263d7c8d7ce760c3f6143bbef3e896e5c6d9f510c2bb3428d93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cece61e0334a263d7c8d7ce760c3f6143bbef3e896e5c6d9f510c2bb3428d93->enter($__internal_6cece61e0334a263d7c8d7ce760c3f6143bbef3e896e5c6d9f510c2bb3428d93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6cece61e0334a263d7c8d7ce760c3f6143bbef3e896e5c6d9f510c2bb3428d93->leave($__internal_6cece61e0334a263d7c8d7ce760c3f6143bbef3e896e5c6d9f510c2bb3428d93_prof);

        
        $__internal_1a3cbe5bb58e11bb82dcefd2241340cc8f20658bf2e731816df54f500f41774d->leave($__internal_1a3cbe5bb58e11bb82dcefd2241340cc8f20658bf2e731816df54f500f41774d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0dce5aaa55a671b46bdbe6300b49531abe8f20fcd3dd3edbbba2d06197bdb8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0dce5aaa55a671b46bdbe6300b49531abe8f20fcd3dd3edbbba2d06197bdb8b->enter($__internal_d0dce5aaa55a671b46bdbe6300b49531abe8f20fcd3dd3edbbba2d06197bdb8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6498a2a7304aabcdf03cc5adb07d6804e36717f81bd8da0fd75308e8b83ee2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6498a2a7304aabcdf03cc5adb07d6804e36717f81bd8da0fd75308e8b83ee2e->enter($__internal_d6498a2a7304aabcdf03cc5adb07d6804e36717f81bd8da0fd75308e8b83ee2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d6498a2a7304aabcdf03cc5adb07d6804e36717f81bd8da0fd75308e8b83ee2e->leave($__internal_d6498a2a7304aabcdf03cc5adb07d6804e36717f81bd8da0fd75308e8b83ee2e_prof);

        
        $__internal_d0dce5aaa55a671b46bdbe6300b49531abe8f20fcd3dd3edbbba2d06197bdb8b->leave($__internal_d0dce5aaa55a671b46bdbe6300b49531abe8f20fcd3dd3edbbba2d06197bdb8b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c568a8caf03f0c59512ad0147c5b3c70a37b764df9b16b23d350a7a6847e20ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c568a8caf03f0c59512ad0147c5b3c70a37b764df9b16b23d350a7a6847e20ec->enter($__internal_c568a8caf03f0c59512ad0147c5b3c70a37b764df9b16b23d350a7a6847e20ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e32eb1812d3aca8705b4cdfeceda8462f676bdb0e0576312d42197b4713e178b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32eb1812d3aca8705b4cdfeceda8462f676bdb0e0576312d42197b4713e178b->enter($__internal_e32eb1812d3aca8705b4cdfeceda8462f676bdb0e0576312d42197b4713e178b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e32eb1812d3aca8705b4cdfeceda8462f676bdb0e0576312d42197b4713e178b->leave($__internal_e32eb1812d3aca8705b4cdfeceda8462f676bdb0e0576312d42197b4713e178b_prof);

        
        $__internal_c568a8caf03f0c59512ad0147c5b3c70a37b764df9b16b23d350a7a6847e20ec->leave($__internal_c568a8caf03f0c59512ad0147c5b3c70a37b764df9b16b23d350a7a6847e20ec_prof);

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
