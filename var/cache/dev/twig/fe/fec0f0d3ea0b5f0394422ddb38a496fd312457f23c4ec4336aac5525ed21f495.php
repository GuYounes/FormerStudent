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
        $__internal_35ff81e89a94de125e2d9c4e58adb04f52ea8b74835a8bdd10f96fdfb6cf2f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35ff81e89a94de125e2d9c4e58adb04f52ea8b74835a8bdd10f96fdfb6cf2f28->enter($__internal_35ff81e89a94de125e2d9c4e58adb04f52ea8b74835a8bdd10f96fdfb6cf2f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_395bea8e03a57f74464128dc4e1664b2593845cf506d73b1526dd84c1e2a84bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_395bea8e03a57f74464128dc4e1664b2593845cf506d73b1526dd84c1e2a84bc->enter($__internal_395bea8e03a57f74464128dc4e1664b2593845cf506d73b1526dd84c1e2a84bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_35ff81e89a94de125e2d9c4e58adb04f52ea8b74835a8bdd10f96fdfb6cf2f28->leave($__internal_35ff81e89a94de125e2d9c4e58adb04f52ea8b74835a8bdd10f96fdfb6cf2f28_prof);

        
        $__internal_395bea8e03a57f74464128dc4e1664b2593845cf506d73b1526dd84c1e2a84bc->leave($__internal_395bea8e03a57f74464128dc4e1664b2593845cf506d73b1526dd84c1e2a84bc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a3c9757d7588facbf3fb92e53289779ef83456d0a77d464bea52eaa78a14111 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a3c9757d7588facbf3fb92e53289779ef83456d0a77d464bea52eaa78a14111->enter($__internal_9a3c9757d7588facbf3fb92e53289779ef83456d0a77d464bea52eaa78a14111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_48ecba70e337febddafd637174ef65e8f08d4daab794dde249268860952cf345 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48ecba70e337febddafd637174ef65e8f08d4daab794dde249268860952cf345->enter($__internal_48ecba70e337febddafd637174ef65e8f08d4daab794dde249268860952cf345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_48ecba70e337febddafd637174ef65e8f08d4daab794dde249268860952cf345->leave($__internal_48ecba70e337febddafd637174ef65e8f08d4daab794dde249268860952cf345_prof);

        
        $__internal_9a3c9757d7588facbf3fb92e53289779ef83456d0a77d464bea52eaa78a14111->leave($__internal_9a3c9757d7588facbf3fb92e53289779ef83456d0a77d464bea52eaa78a14111_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ebb048d2a1db5d640bc536e0532687ded0ed4606da1193a924cff82c33c2befb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebb048d2a1db5d640bc536e0532687ded0ed4606da1193a924cff82c33c2befb->enter($__internal_ebb048d2a1db5d640bc536e0532687ded0ed4606da1193a924cff82c33c2befb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_12bbe5276d9a12ada4974c555408d69859e769106f038758e48efb57c221d29b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12bbe5276d9a12ada4974c555408d69859e769106f038758e48efb57c221d29b->enter($__internal_12bbe5276d9a12ada4974c555408d69859e769106f038758e48efb57c221d29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12bbe5276d9a12ada4974c555408d69859e769106f038758e48efb57c221d29b->leave($__internal_12bbe5276d9a12ada4974c555408d69859e769106f038758e48efb57c221d29b_prof);

        
        $__internal_ebb048d2a1db5d640bc536e0532687ded0ed4606da1193a924cff82c33c2befb->leave($__internal_ebb048d2a1db5d640bc536e0532687ded0ed4606da1193a924cff82c33c2befb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_52dda9f11bc6287ea07d5ed9e7f28d2c08d369fcc5a875d810ed2a769071b0b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52dda9f11bc6287ea07d5ed9e7f28d2c08d369fcc5a875d810ed2a769071b0b5->enter($__internal_52dda9f11bc6287ea07d5ed9e7f28d2c08d369fcc5a875d810ed2a769071b0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8dfc173156ba4f05a42c03692c4ebb7400465828e6a61363704d9f990feef6b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dfc173156ba4f05a42c03692c4ebb7400465828e6a61363704d9f990feef6b0->enter($__internal_8dfc173156ba4f05a42c03692c4ebb7400465828e6a61363704d9f990feef6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8dfc173156ba4f05a42c03692c4ebb7400465828e6a61363704d9f990feef6b0->leave($__internal_8dfc173156ba4f05a42c03692c4ebb7400465828e6a61363704d9f990feef6b0_prof);

        
        $__internal_52dda9f11bc6287ea07d5ed9e7f28d2c08d369fcc5a875d810ed2a769071b0b5->leave($__internal_52dda9f11bc6287ea07d5ed9e7f28d2c08d369fcc5a875d810ed2a769071b0b5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3fa54630578946c23e2b651e8f68f95ca91566728ada8bdcc0d475bceb1a4a4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fa54630578946c23e2b651e8f68f95ca91566728ada8bdcc0d475bceb1a4a4c->enter($__internal_3fa54630578946c23e2b651e8f68f95ca91566728ada8bdcc0d475bceb1a4a4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8aa7d5e1451c82610a4efe9ddfea2599a21d827bb28cbb89491761a2cfaf64b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa7d5e1451c82610a4efe9ddfea2599a21d827bb28cbb89491761a2cfaf64b9->enter($__internal_8aa7d5e1451c82610a4efe9ddfea2599a21d827bb28cbb89491761a2cfaf64b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8aa7d5e1451c82610a4efe9ddfea2599a21d827bb28cbb89491761a2cfaf64b9->leave($__internal_8aa7d5e1451c82610a4efe9ddfea2599a21d827bb28cbb89491761a2cfaf64b9_prof);

        
        $__internal_3fa54630578946c23e2b651e8f68f95ca91566728ada8bdcc0d475bceb1a4a4c->leave($__internal_3fa54630578946c23e2b651e8f68f95ca91566728ada8bdcc0d475bceb1a4a4c_prof);

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
