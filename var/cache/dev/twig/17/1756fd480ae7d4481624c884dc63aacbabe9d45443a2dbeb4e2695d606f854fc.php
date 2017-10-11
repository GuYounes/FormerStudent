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
        $__internal_477cb1ecdc428ed1d6d9fc841d7b42030168017aa3d1f12ece3cf9fc076b2e66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_477cb1ecdc428ed1d6d9fc841d7b42030168017aa3d1f12ece3cf9fc076b2e66->enter($__internal_477cb1ecdc428ed1d6d9fc841d7b42030168017aa3d1f12ece3cf9fc076b2e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_b2157a6bded89d0467d3dfd23de57ce804aee62526e5821f0c83bffd21e2d1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2157a6bded89d0467d3dfd23de57ce804aee62526e5821f0c83bffd21e2d1e9->enter($__internal_b2157a6bded89d0467d3dfd23de57ce804aee62526e5821f0c83bffd21e2d1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_477cb1ecdc428ed1d6d9fc841d7b42030168017aa3d1f12ece3cf9fc076b2e66->leave($__internal_477cb1ecdc428ed1d6d9fc841d7b42030168017aa3d1f12ece3cf9fc076b2e66_prof);

        
        $__internal_b2157a6bded89d0467d3dfd23de57ce804aee62526e5821f0c83bffd21e2d1e9->leave($__internal_b2157a6bded89d0467d3dfd23de57ce804aee62526e5821f0c83bffd21e2d1e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d98bc8ed02c166dd90333ff73339af8578ae5526702d1e6e5732e5a426e5ef6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d98bc8ed02c166dd90333ff73339af8578ae5526702d1e6e5732e5a426e5ef6->enter($__internal_7d98bc8ed02c166dd90333ff73339af8578ae5526702d1e6e5732e5a426e5ef6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4dba996223017418130acaf082caf4963a8cf3bed072a0f9ff24a8dbac43a3f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dba996223017418130acaf082caf4963a8cf3bed072a0f9ff24a8dbac43a3f6->enter($__internal_4dba996223017418130acaf082caf4963a8cf3bed072a0f9ff24a8dbac43a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4dba996223017418130acaf082caf4963a8cf3bed072a0f9ff24a8dbac43a3f6->leave($__internal_4dba996223017418130acaf082caf4963a8cf3bed072a0f9ff24a8dbac43a3f6_prof);

        
        $__internal_7d98bc8ed02c166dd90333ff73339af8578ae5526702d1e6e5732e5a426e5ef6->leave($__internal_7d98bc8ed02c166dd90333ff73339af8578ae5526702d1e6e5732e5a426e5ef6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b94b2cb8e247cb59de5663b21d16323d9e14f3e7f1696dc5b781f23de1c9e388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b94b2cb8e247cb59de5663b21d16323d9e14f3e7f1696dc5b781f23de1c9e388->enter($__internal_b94b2cb8e247cb59de5663b21d16323d9e14f3e7f1696dc5b781f23de1c9e388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_97c8a004d540d2085f609f14847977dbe65a7fbc4e034c0819e36966cb086daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c8a004d540d2085f609f14847977dbe65a7fbc4e034c0819e36966cb086daa->enter($__internal_97c8a004d540d2085f609f14847977dbe65a7fbc4e034c0819e36966cb086daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_97c8a004d540d2085f609f14847977dbe65a7fbc4e034c0819e36966cb086daa->leave($__internal_97c8a004d540d2085f609f14847977dbe65a7fbc4e034c0819e36966cb086daa_prof);

        
        $__internal_b94b2cb8e247cb59de5663b21d16323d9e14f3e7f1696dc5b781f23de1c9e388->leave($__internal_b94b2cb8e247cb59de5663b21d16323d9e14f3e7f1696dc5b781f23de1c9e388_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a30427e0397ba24f695ddc51bc88f3abcc868022a9e4021dd4e0007d60863f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a30427e0397ba24f695ddc51bc88f3abcc868022a9e4021dd4e0007d60863f5->enter($__internal_3a30427e0397ba24f695ddc51bc88f3abcc868022a9e4021dd4e0007d60863f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d018bedbd13d663a0b7cc38ffa0187b932c60ee93f2b7dbbf04a563bb05ea16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d018bedbd13d663a0b7cc38ffa0187b932c60ee93f2b7dbbf04a563bb05ea16->enter($__internal_5d018bedbd13d663a0b7cc38ffa0187b932c60ee93f2b7dbbf04a563bb05ea16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d018bedbd13d663a0b7cc38ffa0187b932c60ee93f2b7dbbf04a563bb05ea16->leave($__internal_5d018bedbd13d663a0b7cc38ffa0187b932c60ee93f2b7dbbf04a563bb05ea16_prof);

        
        $__internal_3a30427e0397ba24f695ddc51bc88f3abcc868022a9e4021dd4e0007d60863f5->leave($__internal_3a30427e0397ba24f695ddc51bc88f3abcc868022a9e4021dd4e0007d60863f5_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d7e08eccb99f8252d04afe9a5cc08b5d1242b2e0ef48401a89dd9367422fca00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e08eccb99f8252d04afe9a5cc08b5d1242b2e0ef48401a89dd9367422fca00->enter($__internal_d7e08eccb99f8252d04afe9a5cc08b5d1242b2e0ef48401a89dd9367422fca00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_7dc5ca5b28a54427cce5e18d45d856f3d965408e06d6ae059104b8d0c53fd472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc5ca5b28a54427cce5e18d45d856f3d965408e06d6ae059104b8d0c53fd472->enter($__internal_7dc5ca5b28a54427cce5e18d45d856f3d965408e06d6ae059104b8d0c53fd472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7dc5ca5b28a54427cce5e18d45d856f3d965408e06d6ae059104b8d0c53fd472->leave($__internal_7dc5ca5b28a54427cce5e18d45d856f3d965408e06d6ae059104b8d0c53fd472_prof);

        
        $__internal_d7e08eccb99f8252d04afe9a5cc08b5d1242b2e0ef48401a89dd9367422fca00->leave($__internal_d7e08eccb99f8252d04afe9a5cc08b5d1242b2e0ef48401a89dd9367422fca00_prof);

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
