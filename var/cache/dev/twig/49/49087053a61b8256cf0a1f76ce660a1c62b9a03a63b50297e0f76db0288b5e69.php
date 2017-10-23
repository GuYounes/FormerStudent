<?php

/* ::base.html.twig */
class __TwigTemplate_b8f30305e3e3fb30cb30cf8f4867a136298aea2134fd01285a05a2c794f016aa extends Twig_Template
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
        $__internal_7123274579ca1365e3288f474b7c299c6804a5a4fd2f040967d6adda51d5dcd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7123274579ca1365e3288f474b7c299c6804a5a4fd2f040967d6adda51d5dcd4->enter($__internal_7123274579ca1365e3288f474b7c299c6804a5a4fd2f040967d6adda51d5dcd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_63b93a857a2c6dc3ffb2b7b207f1666361fc7498262efeac4d46ea3f9a69cfd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b93a857a2c6dc3ffb2b7b207f1666361fc7498262efeac4d46ea3f9a69cfd8->enter($__internal_63b93a857a2c6dc3ffb2b7b207f1666361fc7498262efeac4d46ea3f9a69cfd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7123274579ca1365e3288f474b7c299c6804a5a4fd2f040967d6adda51d5dcd4->leave($__internal_7123274579ca1365e3288f474b7c299c6804a5a4fd2f040967d6adda51d5dcd4_prof);

        
        $__internal_63b93a857a2c6dc3ffb2b7b207f1666361fc7498262efeac4d46ea3f9a69cfd8->leave($__internal_63b93a857a2c6dc3ffb2b7b207f1666361fc7498262efeac4d46ea3f9a69cfd8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b0334576055cc9e4702325a740e77fee4e8b33927f3e7704876a91ebf01cc84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0334576055cc9e4702325a740e77fee4e8b33927f3e7704876a91ebf01cc84->enter($__internal_9b0334576055cc9e4702325a740e77fee4e8b33927f3e7704876a91ebf01cc84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45228e4a3da26e43e6b9760f55b5d2fd111b29c51848795e3ac6ab6756fbfd39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45228e4a3da26e43e6b9760f55b5d2fd111b29c51848795e3ac6ab6756fbfd39->enter($__internal_45228e4a3da26e43e6b9760f55b5d2fd111b29c51848795e3ac6ab6756fbfd39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_45228e4a3da26e43e6b9760f55b5d2fd111b29c51848795e3ac6ab6756fbfd39->leave($__internal_45228e4a3da26e43e6b9760f55b5d2fd111b29c51848795e3ac6ab6756fbfd39_prof);

        
        $__internal_9b0334576055cc9e4702325a740e77fee4e8b33927f3e7704876a91ebf01cc84->leave($__internal_9b0334576055cc9e4702325a740e77fee4e8b33927f3e7704876a91ebf01cc84_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0c551c34d32ac1f683239870716b4695165005e3c01a201cbc6b86b9ecc924c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c551c34d32ac1f683239870716b4695165005e3c01a201cbc6b86b9ecc924c->enter($__internal_e0c551c34d32ac1f683239870716b4695165005e3c01a201cbc6b86b9ecc924c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0fb2bfa3cc210c6ad97bf1f861b4a7d4837fe840a0dd689010e4cc0ebae0181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0fb2bfa3cc210c6ad97bf1f861b4a7d4837fe840a0dd689010e4cc0ebae0181->enter($__internal_e0fb2bfa3cc210c6ad97bf1f861b4a7d4837fe840a0dd689010e4cc0ebae0181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e0fb2bfa3cc210c6ad97bf1f861b4a7d4837fe840a0dd689010e4cc0ebae0181->leave($__internal_e0fb2bfa3cc210c6ad97bf1f861b4a7d4837fe840a0dd689010e4cc0ebae0181_prof);

        
        $__internal_e0c551c34d32ac1f683239870716b4695165005e3c01a201cbc6b86b9ecc924c->leave($__internal_e0c551c34d32ac1f683239870716b4695165005e3c01a201cbc6b86b9ecc924c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff922bd39b3897ddc207b985edef9b1fc1210797938f3263668a2c01741ac4cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff922bd39b3897ddc207b985edef9b1fc1210797938f3263668a2c01741ac4cb->enter($__internal_ff922bd39b3897ddc207b985edef9b1fc1210797938f3263668a2c01741ac4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2dea66231ea66ab42488f65ae3f06af1018c91de26117e24bb590fc47a67946c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dea66231ea66ab42488f65ae3f06af1018c91de26117e24bb590fc47a67946c->enter($__internal_2dea66231ea66ab42488f65ae3f06af1018c91de26117e24bb590fc47a67946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2dea66231ea66ab42488f65ae3f06af1018c91de26117e24bb590fc47a67946c->leave($__internal_2dea66231ea66ab42488f65ae3f06af1018c91de26117e24bb590fc47a67946c_prof);

        
        $__internal_ff922bd39b3897ddc207b985edef9b1fc1210797938f3263668a2c01741ac4cb->leave($__internal_ff922bd39b3897ddc207b985edef9b1fc1210797938f3263668a2c01741ac4cb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c9af34aaeba0138ecdd265066939e5d4175317ec26c677264fc46c76926ac81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9af34aaeba0138ecdd265066939e5d4175317ec26c677264fc46c76926ac81->enter($__internal_6c9af34aaeba0138ecdd265066939e5d4175317ec26c677264fc46c76926ac81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_38be33488fa1950b9b69675ebd154fea1e861c1afe2f6719e333676bc105aa1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38be33488fa1950b9b69675ebd154fea1e861c1afe2f6719e333676bc105aa1f->enter($__internal_38be33488fa1950b9b69675ebd154fea1e861c1afe2f6719e333676bc105aa1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_38be33488fa1950b9b69675ebd154fea1e861c1afe2f6719e333676bc105aa1f->leave($__internal_38be33488fa1950b9b69675ebd154fea1e861c1afe2f6719e333676bc105aa1f_prof);

        
        $__internal_6c9af34aaeba0138ecdd265066939e5d4175317ec26c677264fc46c76926ac81->leave($__internal_6c9af34aaeba0138ecdd265066939e5d4175317ec26c677264fc46c76926ac81_prof);

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
