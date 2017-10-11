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
        $__internal_f8ca16b047007dd9562f284efb9c66af8b57748828aa2ae7c3fe9a23e92bcb7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8ca16b047007dd9562f284efb9c66af8b57748828aa2ae7c3fe9a23e92bcb7f->enter($__internal_f8ca16b047007dd9562f284efb9c66af8b57748828aa2ae7c3fe9a23e92bcb7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_0cbd0d1ebfeb315c092e1b30ae20ae7a04412d26b53daa60ada779692d944ac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cbd0d1ebfeb315c092e1b30ae20ae7a04412d26b53daa60ada779692d944ac9->enter($__internal_0cbd0d1ebfeb315c092e1b30ae20ae7a04412d26b53daa60ada779692d944ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f8ca16b047007dd9562f284efb9c66af8b57748828aa2ae7c3fe9a23e92bcb7f->leave($__internal_f8ca16b047007dd9562f284efb9c66af8b57748828aa2ae7c3fe9a23e92bcb7f_prof);

        
        $__internal_0cbd0d1ebfeb315c092e1b30ae20ae7a04412d26b53daa60ada779692d944ac9->leave($__internal_0cbd0d1ebfeb315c092e1b30ae20ae7a04412d26b53daa60ada779692d944ac9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8cb935c4ce5e204fb17f2322ef88aa9ab82e2215198daaec0cf8c27bad6b924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8cb935c4ce5e204fb17f2322ef88aa9ab82e2215198daaec0cf8c27bad6b924->enter($__internal_d8cb935c4ce5e204fb17f2322ef88aa9ab82e2215198daaec0cf8c27bad6b924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc3539781eabfa0a478a47b669f45f191de6d1a2bac71af789a81dc3d0ee82ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3539781eabfa0a478a47b669f45f191de6d1a2bac71af789a81dc3d0ee82ba->enter($__internal_fc3539781eabfa0a478a47b669f45f191de6d1a2bac71af789a81dc3d0ee82ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fc3539781eabfa0a478a47b669f45f191de6d1a2bac71af789a81dc3d0ee82ba->leave($__internal_fc3539781eabfa0a478a47b669f45f191de6d1a2bac71af789a81dc3d0ee82ba_prof);

        
        $__internal_d8cb935c4ce5e204fb17f2322ef88aa9ab82e2215198daaec0cf8c27bad6b924->leave($__internal_d8cb935c4ce5e204fb17f2322ef88aa9ab82e2215198daaec0cf8c27bad6b924_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9f57934b9ddfa54bebf9ddbeada33c52d1a6a861d65cde033df22fa55d0b9736 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f57934b9ddfa54bebf9ddbeada33c52d1a6a861d65cde033df22fa55d0b9736->enter($__internal_9f57934b9ddfa54bebf9ddbeada33c52d1a6a861d65cde033df22fa55d0b9736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_1f566c118d91cfe411435829cf7db438d222b38f44ceba61fd323f0d30fb8579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f566c118d91cfe411435829cf7db438d222b38f44ceba61fd323f0d30fb8579->enter($__internal_1f566c118d91cfe411435829cf7db438d222b38f44ceba61fd323f0d30fb8579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1f566c118d91cfe411435829cf7db438d222b38f44ceba61fd323f0d30fb8579->leave($__internal_1f566c118d91cfe411435829cf7db438d222b38f44ceba61fd323f0d30fb8579_prof);

        
        $__internal_9f57934b9ddfa54bebf9ddbeada33c52d1a6a861d65cde033df22fa55d0b9736->leave($__internal_9f57934b9ddfa54bebf9ddbeada33c52d1a6a861d65cde033df22fa55d0b9736_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_846b37480964a1db00bad90d9954c3687eba27debf73a3b1fe50a9d3a0065496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_846b37480964a1db00bad90d9954c3687eba27debf73a3b1fe50a9d3a0065496->enter($__internal_846b37480964a1db00bad90d9954c3687eba27debf73a3b1fe50a9d3a0065496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a26c341dc807bc1c6059ed0a48748ffc8f4c7bd5e3b8f668143803e71c91bed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26c341dc807bc1c6059ed0a48748ffc8f4c7bd5e3b8f668143803e71c91bed4->enter($__internal_a26c341dc807bc1c6059ed0a48748ffc8f4c7bd5e3b8f668143803e71c91bed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a26c341dc807bc1c6059ed0a48748ffc8f4c7bd5e3b8f668143803e71c91bed4->leave($__internal_a26c341dc807bc1c6059ed0a48748ffc8f4c7bd5e3b8f668143803e71c91bed4_prof);

        
        $__internal_846b37480964a1db00bad90d9954c3687eba27debf73a3b1fe50a9d3a0065496->leave($__internal_846b37480964a1db00bad90d9954c3687eba27debf73a3b1fe50a9d3a0065496_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7febfa3ab4893f1c61d0ad2e3a73798da21b7be8f80bd3fc2e2105a52dd43a76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7febfa3ab4893f1c61d0ad2e3a73798da21b7be8f80bd3fc2e2105a52dd43a76->enter($__internal_7febfa3ab4893f1c61d0ad2e3a73798da21b7be8f80bd3fc2e2105a52dd43a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4645e23292f8355304279abbcb08a4775954d458e3b8e5113b1722bdde555f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4645e23292f8355304279abbcb08a4775954d458e3b8e5113b1722bdde555f0e->enter($__internal_4645e23292f8355304279abbcb08a4775954d458e3b8e5113b1722bdde555f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4645e23292f8355304279abbcb08a4775954d458e3b8e5113b1722bdde555f0e->leave($__internal_4645e23292f8355304279abbcb08a4775954d458e3b8e5113b1722bdde555f0e_prof);

        
        $__internal_7febfa3ab4893f1c61d0ad2e3a73798da21b7be8f80bd3fc2e2105a52dd43a76->leave($__internal_7febfa3ab4893f1c61d0ad2e3a73798da21b7be8f80bd3fc2e2105a52dd43a76_prof);

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
