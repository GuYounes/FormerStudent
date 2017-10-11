<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c3c89c8a0f9f298765b9bc44803c212fdcc9797b05215efc851a7e28423c7d53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_613bb4871291c97e33dfabea5593db35775599108679133e37aaa44786e918f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613bb4871291c97e33dfabea5593db35775599108679133e37aaa44786e918f1->enter($__internal_613bb4871291c97e33dfabea5593db35775599108679133e37aaa44786e918f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5e9e82ea9dbba08c6b69569a0a5574e17a3bdf2aae2c6185381e435fc35afa8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9e82ea9dbba08c6b69569a0a5574e17a3bdf2aae2c6185381e435fc35afa8f->enter($__internal_5e9e82ea9dbba08c6b69569a0a5574e17a3bdf2aae2c6185381e435fc35afa8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_613bb4871291c97e33dfabea5593db35775599108679133e37aaa44786e918f1->leave($__internal_613bb4871291c97e33dfabea5593db35775599108679133e37aaa44786e918f1_prof);

        
        $__internal_5e9e82ea9dbba08c6b69569a0a5574e17a3bdf2aae2c6185381e435fc35afa8f->leave($__internal_5e9e82ea9dbba08c6b69569a0a5574e17a3bdf2aae2c6185381e435fc35afa8f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8b5cdcfe290663e7335dac2522056345c1752be714c7117dbe461558b42f91c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5cdcfe290663e7335dac2522056345c1752be714c7117dbe461558b42f91c7->enter($__internal_8b5cdcfe290663e7335dac2522056345c1752be714c7117dbe461558b42f91c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0bdbd4c4d872de128c4806c7f10b92fafff27318ddb47052aa2db717412b283d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bdbd4c4d872de128c4806c7f10b92fafff27318ddb47052aa2db717412b283d->enter($__internal_0bdbd4c4d872de128c4806c7f10b92fafff27318ddb47052aa2db717412b283d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0bdbd4c4d872de128c4806c7f10b92fafff27318ddb47052aa2db717412b283d->leave($__internal_0bdbd4c4d872de128c4806c7f10b92fafff27318ddb47052aa2db717412b283d_prof);

        
        $__internal_8b5cdcfe290663e7335dac2522056345c1752be714c7117dbe461558b42f91c7->leave($__internal_8b5cdcfe290663e7335dac2522056345c1752be714c7117dbe461558b42f91c7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ed03053f399c9e716d7610baf0c11f5304bce290544bbd054943e9948c4e0a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ed03053f399c9e716d7610baf0c11f5304bce290544bbd054943e9948c4e0a8->enter($__internal_3ed03053f399c9e716d7610baf0c11f5304bce290544bbd054943e9948c4e0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f62c2db45efac6010e1856cf13e0916dd3f140ac4e5c8945ab34631c05ec910c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f62c2db45efac6010e1856cf13e0916dd3f140ac4e5c8945ab34631c05ec910c->enter($__internal_f62c2db45efac6010e1856cf13e0916dd3f140ac4e5c8945ab34631c05ec910c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f62c2db45efac6010e1856cf13e0916dd3f140ac4e5c8945ab34631c05ec910c->leave($__internal_f62c2db45efac6010e1856cf13e0916dd3f140ac4e5c8945ab34631c05ec910c_prof);

        
        $__internal_3ed03053f399c9e716d7610baf0c11f5304bce290544bbd054943e9948c4e0a8->leave($__internal_3ed03053f399c9e716d7610baf0c11f5304bce290544bbd054943e9948c4e0a8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c172805101c20d0f62d87f71f0132576a2671703282a42ee49bf61f6ecf3ad27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c172805101c20d0f62d87f71f0132576a2671703282a42ee49bf61f6ecf3ad27->enter($__internal_c172805101c20d0f62d87f71f0132576a2671703282a42ee49bf61f6ecf3ad27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_555e794274c12a42aaa9182226627d64ae1c80ee75c5ce359aea14fca9e1a7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555e794274c12a42aaa9182226627d64ae1c80ee75c5ce359aea14fca9e1a7ed->enter($__internal_555e794274c12a42aaa9182226627d64ae1c80ee75c5ce359aea14fca9e1a7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_555e794274c12a42aaa9182226627d64ae1c80ee75c5ce359aea14fca9e1a7ed->leave($__internal_555e794274c12a42aaa9182226627d64ae1c80ee75c5ce359aea14fca9e1a7ed_prof);

        
        $__internal_c172805101c20d0f62d87f71f0132576a2671703282a42ee49bf61f6ecf3ad27->leave($__internal_c172805101c20d0f62d87f71f0132576a2671703282a42ee49bf61f6ecf3ad27_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
