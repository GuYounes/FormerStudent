<?php

/* base.html.twig */
class __TwigTemplate_c265fa1ab73d8f12af4ea2cb525109a096c01d8e36116a2f1d34bfe026161dc0 extends Twig_Template
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
        $__internal_40a91ffea6844fcee79705ffa98c5dc9f026df2d0b22c853554df6b57b015be0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40a91ffea6844fcee79705ffa98c5dc9f026df2d0b22c853554df6b57b015be0->enter($__internal_40a91ffea6844fcee79705ffa98c5dc9f026df2d0b22c853554df6b57b015be0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_4d6bfff6f32b33b6b6a11728926828b2d48d7399cd4d2fc9f69eaa99e7d435bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6bfff6f32b33b6b6a11728926828b2d48d7399cd4d2fc9f69eaa99e7d435bd->enter($__internal_4d6bfff6f32b33b6b6a11728926828b2d48d7399cd4d2fc9f69eaa99e7d435bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_40a91ffea6844fcee79705ffa98c5dc9f026df2d0b22c853554df6b57b015be0->leave($__internal_40a91ffea6844fcee79705ffa98c5dc9f026df2d0b22c853554df6b57b015be0_prof);

        
        $__internal_4d6bfff6f32b33b6b6a11728926828b2d48d7399cd4d2fc9f69eaa99e7d435bd->leave($__internal_4d6bfff6f32b33b6b6a11728926828b2d48d7399cd4d2fc9f69eaa99e7d435bd_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f411704ac845973a0f5ce51f7d8f2bcfb1b930fb5885ac881524fd908af5032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f411704ac845973a0f5ce51f7d8f2bcfb1b930fb5885ac881524fd908af5032->enter($__internal_8f411704ac845973a0f5ce51f7d8f2bcfb1b930fb5885ac881524fd908af5032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0fd1bc76681766880cf351def5846215571fb18c8a9a3f0fb91e49d2fc05c199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fd1bc76681766880cf351def5846215571fb18c8a9a3f0fb91e49d2fc05c199->enter($__internal_0fd1bc76681766880cf351def5846215571fb18c8a9a3f0fb91e49d2fc05c199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0fd1bc76681766880cf351def5846215571fb18c8a9a3f0fb91e49d2fc05c199->leave($__internal_0fd1bc76681766880cf351def5846215571fb18c8a9a3f0fb91e49d2fc05c199_prof);

        
        $__internal_8f411704ac845973a0f5ce51f7d8f2bcfb1b930fb5885ac881524fd908af5032->leave($__internal_8f411704ac845973a0f5ce51f7d8f2bcfb1b930fb5885ac881524fd908af5032_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d4af3cb5cec15555e5c6090a0a35e2c992e1e04b3001f977c397cc20160b4a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4af3cb5cec15555e5c6090a0a35e2c992e1e04b3001f977c397cc20160b4a15->enter($__internal_d4af3cb5cec15555e5c6090a0a35e2c992e1e04b3001f977c397cc20160b4a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a445071120cc566e322a7b13706f89cd1eda93302122abf8ffdac51635d751fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a445071120cc566e322a7b13706f89cd1eda93302122abf8ffdac51635d751fd->enter($__internal_a445071120cc566e322a7b13706f89cd1eda93302122abf8ffdac51635d751fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a445071120cc566e322a7b13706f89cd1eda93302122abf8ffdac51635d751fd->leave($__internal_a445071120cc566e322a7b13706f89cd1eda93302122abf8ffdac51635d751fd_prof);

        
        $__internal_d4af3cb5cec15555e5c6090a0a35e2c992e1e04b3001f977c397cc20160b4a15->leave($__internal_d4af3cb5cec15555e5c6090a0a35e2c992e1e04b3001f977c397cc20160b4a15_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_12bef275f6973022038a4ad19fb444c9f742cc7947f603349afef7fa9af52861 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12bef275f6973022038a4ad19fb444c9f742cc7947f603349afef7fa9af52861->enter($__internal_12bef275f6973022038a4ad19fb444c9f742cc7947f603349afef7fa9af52861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5222467e2975661b37d50b2acc50bd6302e5b54bb731ebcfd8997808cd71a34e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5222467e2975661b37d50b2acc50bd6302e5b54bb731ebcfd8997808cd71a34e->enter($__internal_5222467e2975661b37d50b2acc50bd6302e5b54bb731ebcfd8997808cd71a34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5222467e2975661b37d50b2acc50bd6302e5b54bb731ebcfd8997808cd71a34e->leave($__internal_5222467e2975661b37d50b2acc50bd6302e5b54bb731ebcfd8997808cd71a34e_prof);

        
        $__internal_12bef275f6973022038a4ad19fb444c9f742cc7947f603349afef7fa9af52861->leave($__internal_12bef275f6973022038a4ad19fb444c9f742cc7947f603349afef7fa9af52861_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ee703fdaca91777a5893fd1f071f643d49c5081dd33c16251abdd63bc71935ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee703fdaca91777a5893fd1f071f643d49c5081dd33c16251abdd63bc71935ef->enter($__internal_ee703fdaca91777a5893fd1f071f643d49c5081dd33c16251abdd63bc71935ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e5bff052b0399a52302c8786b31ce438ef9e9af944a01398eea877b7e27bd75f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5bff052b0399a52302c8786b31ce438ef9e9af944a01398eea877b7e27bd75f->enter($__internal_e5bff052b0399a52302c8786b31ce438ef9e9af944a01398eea877b7e27bd75f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e5bff052b0399a52302c8786b31ce438ef9e9af944a01398eea877b7e27bd75f->leave($__internal_e5bff052b0399a52302c8786b31ce438ef9e9af944a01398eea877b7e27bd75f_prof);

        
        $__internal_ee703fdaca91777a5893fd1f071f643d49c5081dd33c16251abdd63bc71935ef->leave($__internal_ee703fdaca91777a5893fd1f071f643d49c5081dd33c16251abdd63bc71935ef_prof);

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
