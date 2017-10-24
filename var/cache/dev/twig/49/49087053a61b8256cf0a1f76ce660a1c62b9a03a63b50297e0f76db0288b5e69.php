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
        $__internal_a243053a0e4b300b75193ae00abc511cc03c49d0d9db850e9951c07201f1d8cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a243053a0e4b300b75193ae00abc511cc03c49d0d9db850e9951c07201f1d8cf->enter($__internal_a243053a0e4b300b75193ae00abc511cc03c49d0d9db850e9951c07201f1d8cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_054a1b818a612e27264902e4809627d08b9947cfbe79dbf56ff290b6976843c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_054a1b818a612e27264902e4809627d08b9947cfbe79dbf56ff290b6976843c9->enter($__internal_054a1b818a612e27264902e4809627d08b9947cfbe79dbf56ff290b6976843c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a243053a0e4b300b75193ae00abc511cc03c49d0d9db850e9951c07201f1d8cf->leave($__internal_a243053a0e4b300b75193ae00abc511cc03c49d0d9db850e9951c07201f1d8cf_prof);

        
        $__internal_054a1b818a612e27264902e4809627d08b9947cfbe79dbf56ff290b6976843c9->leave($__internal_054a1b818a612e27264902e4809627d08b9947cfbe79dbf56ff290b6976843c9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dac102977db8292e8026ce5d7317caddb487449a235a84bba15074d8d59ea13f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dac102977db8292e8026ce5d7317caddb487449a235a84bba15074d8d59ea13f->enter($__internal_dac102977db8292e8026ce5d7317caddb487449a235a84bba15074d8d59ea13f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9965284abb643e5a228c8746e8ec6feeb6e1d8ae6730972e2fc05eaec61a180 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9965284abb643e5a228c8746e8ec6feeb6e1d8ae6730972e2fc05eaec61a180->enter($__internal_b9965284abb643e5a228c8746e8ec6feeb6e1d8ae6730972e2fc05eaec61a180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b9965284abb643e5a228c8746e8ec6feeb6e1d8ae6730972e2fc05eaec61a180->leave($__internal_b9965284abb643e5a228c8746e8ec6feeb6e1d8ae6730972e2fc05eaec61a180_prof);

        
        $__internal_dac102977db8292e8026ce5d7317caddb487449a235a84bba15074d8d59ea13f->leave($__internal_dac102977db8292e8026ce5d7317caddb487449a235a84bba15074d8d59ea13f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_79a9441480fb106e6f0260a03c19a3402812ba7bd069395d7a3241f95c45c2f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a9441480fb106e6f0260a03c19a3402812ba7bd069395d7a3241f95c45c2f1->enter($__internal_79a9441480fb106e6f0260a03c19a3402812ba7bd069395d7a3241f95c45c2f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9cff7dc6b8a9f7f00431066845aa754e943ca8caeb30d56c3fe8a4bea0195855 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cff7dc6b8a9f7f00431066845aa754e943ca8caeb30d56c3fe8a4bea0195855->enter($__internal_9cff7dc6b8a9f7f00431066845aa754e943ca8caeb30d56c3fe8a4bea0195855_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9cff7dc6b8a9f7f00431066845aa754e943ca8caeb30d56c3fe8a4bea0195855->leave($__internal_9cff7dc6b8a9f7f00431066845aa754e943ca8caeb30d56c3fe8a4bea0195855_prof);

        
        $__internal_79a9441480fb106e6f0260a03c19a3402812ba7bd069395d7a3241f95c45c2f1->leave($__internal_79a9441480fb106e6f0260a03c19a3402812ba7bd069395d7a3241f95c45c2f1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a95b50071339f857188690a9d60a1fc118869a54f5c13b4dfab96aeba0d21f31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a95b50071339f857188690a9d60a1fc118869a54f5c13b4dfab96aeba0d21f31->enter($__internal_a95b50071339f857188690a9d60a1fc118869a54f5c13b4dfab96aeba0d21f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fcc650b1816e4f0dea99974c3f1e0739666d57423b2355463c939c39a253715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcc650b1816e4f0dea99974c3f1e0739666d57423b2355463c939c39a253715->enter($__internal_9fcc650b1816e4f0dea99974c3f1e0739666d57423b2355463c939c39a253715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9fcc650b1816e4f0dea99974c3f1e0739666d57423b2355463c939c39a253715->leave($__internal_9fcc650b1816e4f0dea99974c3f1e0739666d57423b2355463c939c39a253715_prof);

        
        $__internal_a95b50071339f857188690a9d60a1fc118869a54f5c13b4dfab96aeba0d21f31->leave($__internal_a95b50071339f857188690a9d60a1fc118869a54f5c13b4dfab96aeba0d21f31_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5b22f0894f3459d02280bfd16fa6794fdd99433cb807e79c722574c07fbde991 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b22f0894f3459d02280bfd16fa6794fdd99433cb807e79c722574c07fbde991->enter($__internal_5b22f0894f3459d02280bfd16fa6794fdd99433cb807e79c722574c07fbde991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0ecfce10fef68d68198505de114194e827f6b738a67a7293018cd06fce43ad31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ecfce10fef68d68198505de114194e827f6b738a67a7293018cd06fce43ad31->enter($__internal_0ecfce10fef68d68198505de114194e827f6b738a67a7293018cd06fce43ad31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ecfce10fef68d68198505de114194e827f6b738a67a7293018cd06fce43ad31->leave($__internal_0ecfce10fef68d68198505de114194e827f6b738a67a7293018cd06fce43ad31_prof);

        
        $__internal_5b22f0894f3459d02280bfd16fa6794fdd99433cb807e79c722574c07fbde991->leave($__internal_5b22f0894f3459d02280bfd16fa6794fdd99433cb807e79c722574c07fbde991_prof);

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
