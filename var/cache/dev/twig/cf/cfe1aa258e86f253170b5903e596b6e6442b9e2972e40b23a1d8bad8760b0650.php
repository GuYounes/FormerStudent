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
        $__internal_3124016fc5d92b06137fb33081d90984a07db3c0d4f8265e0e23524724691ba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3124016fc5d92b06137fb33081d90984a07db3c0d4f8265e0e23524724691ba8->enter($__internal_3124016fc5d92b06137fb33081d90984a07db3c0d4f8265e0e23524724691ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6c516039dee1cf137ccbfefcd6bbf999faa436d85943f5bc241221a6cc94d358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c516039dee1cf137ccbfefcd6bbf999faa436d85943f5bc241221a6cc94d358->enter($__internal_6c516039dee1cf137ccbfefcd6bbf999faa436d85943f5bc241221a6cc94d358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_3124016fc5d92b06137fb33081d90984a07db3c0d4f8265e0e23524724691ba8->leave($__internal_3124016fc5d92b06137fb33081d90984a07db3c0d4f8265e0e23524724691ba8_prof);

        
        $__internal_6c516039dee1cf137ccbfefcd6bbf999faa436d85943f5bc241221a6cc94d358->leave($__internal_6c516039dee1cf137ccbfefcd6bbf999faa436d85943f5bc241221a6cc94d358_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee32f7656e8fd40017365c1a1bce35d6cf86c12ba48ee3b46f9e388190ec22c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee32f7656e8fd40017365c1a1bce35d6cf86c12ba48ee3b46f9e388190ec22c4->enter($__internal_ee32f7656e8fd40017365c1a1bce35d6cf86c12ba48ee3b46f9e388190ec22c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b91dc152a962590a8b9a2bc6e43e15419fa8c2dd5aa6874e782eb697f415ce90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91dc152a962590a8b9a2bc6e43e15419fa8c2dd5aa6874e782eb697f415ce90->enter($__internal_b91dc152a962590a8b9a2bc6e43e15419fa8c2dd5aa6874e782eb697f415ce90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b91dc152a962590a8b9a2bc6e43e15419fa8c2dd5aa6874e782eb697f415ce90->leave($__internal_b91dc152a962590a8b9a2bc6e43e15419fa8c2dd5aa6874e782eb697f415ce90_prof);

        
        $__internal_ee32f7656e8fd40017365c1a1bce35d6cf86c12ba48ee3b46f9e388190ec22c4->leave($__internal_ee32f7656e8fd40017365c1a1bce35d6cf86c12ba48ee3b46f9e388190ec22c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d398b558ad1821942385af756010a844501e298571d90829dafd1b3fe47f550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d398b558ad1821942385af756010a844501e298571d90829dafd1b3fe47f550->enter($__internal_9d398b558ad1821942385af756010a844501e298571d90829dafd1b3fe47f550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aeca5c1aea1106bd34e03757df479a959dfb6d587134678705a754d0e899cbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeca5c1aea1106bd34e03757df479a959dfb6d587134678705a754d0e899cbdf->enter($__internal_aeca5c1aea1106bd34e03757df479a959dfb6d587134678705a754d0e899cbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aeca5c1aea1106bd34e03757df479a959dfb6d587134678705a754d0e899cbdf->leave($__internal_aeca5c1aea1106bd34e03757df479a959dfb6d587134678705a754d0e899cbdf_prof);

        
        $__internal_9d398b558ad1821942385af756010a844501e298571d90829dafd1b3fe47f550->leave($__internal_9d398b558ad1821942385af756010a844501e298571d90829dafd1b3fe47f550_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b8a33201c9ff83cbb2f1e425614353f33ac58f36131fd096167b31120704000 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b8a33201c9ff83cbb2f1e425614353f33ac58f36131fd096167b31120704000->enter($__internal_9b8a33201c9ff83cbb2f1e425614353f33ac58f36131fd096167b31120704000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8b6f13626fe97b30772ee22c2d4c4b48d33cc59aabc4a2b959809c96acee42aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b6f13626fe97b30772ee22c2d4c4b48d33cc59aabc4a2b959809c96acee42aa->enter($__internal_8b6f13626fe97b30772ee22c2d4c4b48d33cc59aabc4a2b959809c96acee42aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8b6f13626fe97b30772ee22c2d4c4b48d33cc59aabc4a2b959809c96acee42aa->leave($__internal_8b6f13626fe97b30772ee22c2d4c4b48d33cc59aabc4a2b959809c96acee42aa_prof);

        
        $__internal_9b8a33201c9ff83cbb2f1e425614353f33ac58f36131fd096167b31120704000->leave($__internal_9b8a33201c9ff83cbb2f1e425614353f33ac58f36131fd096167b31120704000_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5363bf0031c0bc9bce447c872c73d2cf277613715b293074aefb6c68049b022f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5363bf0031c0bc9bce447c872c73d2cf277613715b293074aefb6c68049b022f->enter($__internal_5363bf0031c0bc9bce447c872c73d2cf277613715b293074aefb6c68049b022f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9c8fce640d49f589898a405faadb0951a467c8bdfc182d315e4a355fada58a02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c8fce640d49f589898a405faadb0951a467c8bdfc182d315e4a355fada58a02->enter($__internal_9c8fce640d49f589898a405faadb0951a467c8bdfc182d315e4a355fada58a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9c8fce640d49f589898a405faadb0951a467c8bdfc182d315e4a355fada58a02->leave($__internal_9c8fce640d49f589898a405faadb0951a467c8bdfc182d315e4a355fada58a02_prof);

        
        $__internal_5363bf0031c0bc9bce447c872c73d2cf277613715b293074aefb6c68049b022f->leave($__internal_5363bf0031c0bc9bce447c872c73d2cf277613715b293074aefb6c68049b022f_prof);

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
