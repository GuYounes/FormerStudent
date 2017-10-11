<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_97ac3e2457da1f03a14fc71ece1e538546be990d7d2a9329467b1bff51e8a758 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e45bd85ae3125d6dfe34935f188cb92e5a82c10bc9c7196585565f87171c1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e45bd85ae3125d6dfe34935f188cb92e5a82c10bc9c7196585565f87171c1df->enter($__internal_1e45bd85ae3125d6dfe34935f188cb92e5a82c10bc9c7196585565f87171c1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_4e96f15a5d60194a6b57e4894aa6c13dc3dcb9c1b1c6fdd6e8b14244f2ee099c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e96f15a5d60194a6b57e4894aa6c13dc3dcb9c1b1c6fdd6e8b14244f2ee099c->enter($__internal_4e96f15a5d60194a6b57e4894aa6c13dc3dcb9c1b1c6fdd6e8b14244f2ee099c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e45bd85ae3125d6dfe34935f188cb92e5a82c10bc9c7196585565f87171c1df->leave($__internal_1e45bd85ae3125d6dfe34935f188cb92e5a82c10bc9c7196585565f87171c1df_prof);

        
        $__internal_4e96f15a5d60194a6b57e4894aa6c13dc3dcb9c1b1c6fdd6e8b14244f2ee099c->leave($__internal_4e96f15a5d60194a6b57e4894aa6c13dc3dcb9c1b1c6fdd6e8b14244f2ee099c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_535ea75bc553c593f0c495305e1632ac7d2ea3735c51d58e2b51a1b1a0e113fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_535ea75bc553c593f0c495305e1632ac7d2ea3735c51d58e2b51a1b1a0e113fa->enter($__internal_535ea75bc553c593f0c495305e1632ac7d2ea3735c51d58e2b51a1b1a0e113fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e3e0274dd1a850f9282b5e4e9eaaf2e62cb135615d5f965f84d13eb0fc68abf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e3e0274dd1a850f9282b5e4e9eaaf2e62cb135615d5f965f84d13eb0fc68abf->enter($__internal_7e3e0274dd1a850f9282b5e4e9eaaf2e62cb135615d5f965f84d13eb0fc68abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7e3e0274dd1a850f9282b5e4e9eaaf2e62cb135615d5f965f84d13eb0fc68abf->leave($__internal_7e3e0274dd1a850f9282b5e4e9eaaf2e62cb135615d5f965f84d13eb0fc68abf_prof);

        
        $__internal_535ea75bc553c593f0c495305e1632ac7d2ea3735c51d58e2b51a1b1a0e113fa->leave($__internal_535ea75bc553c593f0c495305e1632ac7d2ea3735c51d58e2b51a1b1a0e113fa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3348b0053708054e7f2ad8ca710a5041ce6b8e78d8d7aed98058dd26a7849c24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3348b0053708054e7f2ad8ca710a5041ce6b8e78d8d7aed98058dd26a7849c24->enter($__internal_3348b0053708054e7f2ad8ca710a5041ce6b8e78d8d7aed98058dd26a7849c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a45449f8aa85d713a8584d517c413943f480f6da3035d4ca3d17f2b1984bc074 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a45449f8aa85d713a8584d517c413943f480f6da3035d4ca3d17f2b1984bc074->enter($__internal_a45449f8aa85d713a8584d517c413943f480f6da3035d4ca3d17f2b1984bc074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a45449f8aa85d713a8584d517c413943f480f6da3035d4ca3d17f2b1984bc074->leave($__internal_a45449f8aa85d713a8584d517c413943f480f6da3035d4ca3d17f2b1984bc074_prof);

        
        $__internal_3348b0053708054e7f2ad8ca710a5041ce6b8e78d8d7aed98058dd26a7849c24->leave($__internal_3348b0053708054e7f2ad8ca710a5041ce6b8e78d8d7aed98058dd26a7849c24_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
