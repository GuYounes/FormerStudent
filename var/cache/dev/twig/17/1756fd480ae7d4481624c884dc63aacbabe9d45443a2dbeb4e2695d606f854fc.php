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
        $__internal_bc46d9a2cd24c6f49802928dc0b0b67256cf859f6c395f39b70f9f7968e1f4dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc46d9a2cd24c6f49802928dc0b0b67256cf859f6c395f39b70f9f7968e1f4dd->enter($__internal_bc46d9a2cd24c6f49802928dc0b0b67256cf859f6c395f39b70f9f7968e1f4dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_d8563644e9acf24667c0554206f2cdc5a7c7a84f9ab895f749f288d0fe6ccd33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8563644e9acf24667c0554206f2cdc5a7c7a84f9ab895f749f288d0fe6ccd33->enter($__internal_d8563644e9acf24667c0554206f2cdc5a7c7a84f9ab895f749f288d0fe6ccd33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_bc46d9a2cd24c6f49802928dc0b0b67256cf859f6c395f39b70f9f7968e1f4dd->leave($__internal_bc46d9a2cd24c6f49802928dc0b0b67256cf859f6c395f39b70f9f7968e1f4dd_prof);

        
        $__internal_d8563644e9acf24667c0554206f2cdc5a7c7a84f9ab895f749f288d0fe6ccd33->leave($__internal_d8563644e9acf24667c0554206f2cdc5a7c7a84f9ab895f749f288d0fe6ccd33_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_49a7545303206555cc57f4feffd7e1d7f861a20520ce73d5baa0f22476b2b7e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49a7545303206555cc57f4feffd7e1d7f861a20520ce73d5baa0f22476b2b7e4->enter($__internal_49a7545303206555cc57f4feffd7e1d7f861a20520ce73d5baa0f22476b2b7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_35a229907ce5110872e475d15d2714fea7ff0ae3dc687eed58b8b19f2644fe50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35a229907ce5110872e475d15d2714fea7ff0ae3dc687eed58b8b19f2644fe50->enter($__internal_35a229907ce5110872e475d15d2714fea7ff0ae3dc687eed58b8b19f2644fe50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_35a229907ce5110872e475d15d2714fea7ff0ae3dc687eed58b8b19f2644fe50->leave($__internal_35a229907ce5110872e475d15d2714fea7ff0ae3dc687eed58b8b19f2644fe50_prof);

        
        $__internal_49a7545303206555cc57f4feffd7e1d7f861a20520ce73d5baa0f22476b2b7e4->leave($__internal_49a7545303206555cc57f4feffd7e1d7f861a20520ce73d5baa0f22476b2b7e4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0ce9f64f89d2238c480b1d3bfb9359338920cfce2f9f175027ab595df89179c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ce9f64f89d2238c480b1d3bfb9359338920cfce2f9f175027ab595df89179c->enter($__internal_d0ce9f64f89d2238c480b1d3bfb9359338920cfce2f9f175027ab595df89179c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_4ada74dc3f8a664dde4b9a61794fa5fa6810a21a9a9ac324f7fb1f053614d4e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ada74dc3f8a664dde4b9a61794fa5fa6810a21a9a9ac324f7fb1f053614d4e8->enter($__internal_4ada74dc3f8a664dde4b9a61794fa5fa6810a21a9a9ac324f7fb1f053614d4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4ada74dc3f8a664dde4b9a61794fa5fa6810a21a9a9ac324f7fb1f053614d4e8->leave($__internal_4ada74dc3f8a664dde4b9a61794fa5fa6810a21a9a9ac324f7fb1f053614d4e8_prof);

        
        $__internal_d0ce9f64f89d2238c480b1d3bfb9359338920cfce2f9f175027ab595df89179c->leave($__internal_d0ce9f64f89d2238c480b1d3bfb9359338920cfce2f9f175027ab595df89179c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee6078367af83485655d31fe4d7c8a4b4fc2cce5af757d5e1be5aa65c693dc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee6078367af83485655d31fe4d7c8a4b4fc2cce5af757d5e1be5aa65c693dc6f->enter($__internal_ee6078367af83485655d31fe4d7c8a4b4fc2cce5af757d5e1be5aa65c693dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4730700e235b1b3546cab84c45717cd3d18dd0e982dc5a79e9ff47aaac234945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4730700e235b1b3546cab84c45717cd3d18dd0e982dc5a79e9ff47aaac234945->enter($__internal_4730700e235b1b3546cab84c45717cd3d18dd0e982dc5a79e9ff47aaac234945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4730700e235b1b3546cab84c45717cd3d18dd0e982dc5a79e9ff47aaac234945->leave($__internal_4730700e235b1b3546cab84c45717cd3d18dd0e982dc5a79e9ff47aaac234945_prof);

        
        $__internal_ee6078367af83485655d31fe4d7c8a4b4fc2cce5af757d5e1be5aa65c693dc6f->leave($__internal_ee6078367af83485655d31fe4d7c8a4b4fc2cce5af757d5e1be5aa65c693dc6f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_18a8baf9f624499837ffa0abb4f32005a438a572530acd296b8938fdb6409bae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a8baf9f624499837ffa0abb4f32005a438a572530acd296b8938fdb6409bae->enter($__internal_18a8baf9f624499837ffa0abb4f32005a438a572530acd296b8938fdb6409bae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_49aeaf57992f0cecf8b28ac311723611543b412d9e129a1a344fca48b8dc451a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49aeaf57992f0cecf8b28ac311723611543b412d9e129a1a344fca48b8dc451a->enter($__internal_49aeaf57992f0cecf8b28ac311723611543b412d9e129a1a344fca48b8dc451a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_49aeaf57992f0cecf8b28ac311723611543b412d9e129a1a344fca48b8dc451a->leave($__internal_49aeaf57992f0cecf8b28ac311723611543b412d9e129a1a344fca48b8dc451a_prof);

        
        $__internal_18a8baf9f624499837ffa0abb4f32005a438a572530acd296b8938fdb6409bae->leave($__internal_18a8baf9f624499837ffa0abb4f32005a438a572530acd296b8938fdb6409bae_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\Symfony\\app/Resources\\views/base.html.twig");
    }
}
