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
        $__internal_2da65a829e5819c1caaed9578d61724354505dd11bc65698b40e8db67fdb6fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da65a829e5819c1caaed9578d61724354505dd11bc65698b40e8db67fdb6fc0->enter($__internal_2da65a829e5819c1caaed9578d61724354505dd11bc65698b40e8db67fdb6fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_e127ccab6e62536f75e26c5d61cac272f96ebcb8fff8e3b3aba95c0b2634b328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e127ccab6e62536f75e26c5d61cac272f96ebcb8fff8e3b3aba95c0b2634b328->enter($__internal_e127ccab6e62536f75e26c5d61cac272f96ebcb8fff8e3b3aba95c0b2634b328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_2da65a829e5819c1caaed9578d61724354505dd11bc65698b40e8db67fdb6fc0->leave($__internal_2da65a829e5819c1caaed9578d61724354505dd11bc65698b40e8db67fdb6fc0_prof);

        
        $__internal_e127ccab6e62536f75e26c5d61cac272f96ebcb8fff8e3b3aba95c0b2634b328->leave($__internal_e127ccab6e62536f75e26c5d61cac272f96ebcb8fff8e3b3aba95c0b2634b328_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fdc07c020b011490664b60e4cee0f84def062728caff965a36b1b2ba647182b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fdc07c020b011490664b60e4cee0f84def062728caff965a36b1b2ba647182b->enter($__internal_7fdc07c020b011490664b60e4cee0f84def062728caff965a36b1b2ba647182b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_40848b30711427bfce5ee12641fe54df7f6285f5f5377163c9cd74f7c5d628f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40848b30711427bfce5ee12641fe54df7f6285f5f5377163c9cd74f7c5d628f4->enter($__internal_40848b30711427bfce5ee12641fe54df7f6285f5f5377163c9cd74f7c5d628f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_40848b30711427bfce5ee12641fe54df7f6285f5f5377163c9cd74f7c5d628f4->leave($__internal_40848b30711427bfce5ee12641fe54df7f6285f5f5377163c9cd74f7c5d628f4_prof);

        
        $__internal_7fdc07c020b011490664b60e4cee0f84def062728caff965a36b1b2ba647182b->leave($__internal_7fdc07c020b011490664b60e4cee0f84def062728caff965a36b1b2ba647182b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c397c4377c25878226a31b39fcdf9747e80a3e8c8058d9a40984bba91edc978d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c397c4377c25878226a31b39fcdf9747e80a3e8c8058d9a40984bba91edc978d->enter($__internal_c397c4377c25878226a31b39fcdf9747e80a3e8c8058d9a40984bba91edc978d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_55e388e5923cd41b140cd1284c2121870d6bb005c9052404dae45d2e8379dd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e388e5923cd41b140cd1284c2121870d6bb005c9052404dae45d2e8379dd5f->enter($__internal_55e388e5923cd41b140cd1284c2121870d6bb005c9052404dae45d2e8379dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_55e388e5923cd41b140cd1284c2121870d6bb005c9052404dae45d2e8379dd5f->leave($__internal_55e388e5923cd41b140cd1284c2121870d6bb005c9052404dae45d2e8379dd5f_prof);

        
        $__internal_c397c4377c25878226a31b39fcdf9747e80a3e8c8058d9a40984bba91edc978d->leave($__internal_c397c4377c25878226a31b39fcdf9747e80a3e8c8058d9a40984bba91edc978d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ecdf825ad31b8d6cac6afbc63094c53dace1568f59d528582cec14b25bdfea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecdf825ad31b8d6cac6afbc63094c53dace1568f59d528582cec14b25bdfea9->enter($__internal_5ecdf825ad31b8d6cac6afbc63094c53dace1568f59d528582cec14b25bdfea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_912064e965a8fd28a2972c967a31866ef31ea2caefb4822f339e3359b8ab79da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912064e965a8fd28a2972c967a31866ef31ea2caefb4822f339e3359b8ab79da->enter($__internal_912064e965a8fd28a2972c967a31866ef31ea2caefb4822f339e3359b8ab79da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_912064e965a8fd28a2972c967a31866ef31ea2caefb4822f339e3359b8ab79da->leave($__internal_912064e965a8fd28a2972c967a31866ef31ea2caefb4822f339e3359b8ab79da_prof);

        
        $__internal_5ecdf825ad31b8d6cac6afbc63094c53dace1568f59d528582cec14b25bdfea9->leave($__internal_5ecdf825ad31b8d6cac6afbc63094c53dace1568f59d528582cec14b25bdfea9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a5393ba3611eb0ad9daf75e3dac4475ec175ac33743b4293955ee9c8ac0a9127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5393ba3611eb0ad9daf75e3dac4475ec175ac33743b4293955ee9c8ac0a9127->enter($__internal_a5393ba3611eb0ad9daf75e3dac4475ec175ac33743b4293955ee9c8ac0a9127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9ef7b6065d25e4fb0322a54086c9c93b18ffdf6103b55917057172a3843fa182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef7b6065d25e4fb0322a54086c9c93b18ffdf6103b55917057172a3843fa182->enter($__internal_9ef7b6065d25e4fb0322a54086c9c93b18ffdf6103b55917057172a3843fa182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9ef7b6065d25e4fb0322a54086c9c93b18ffdf6103b55917057172a3843fa182->leave($__internal_9ef7b6065d25e4fb0322a54086c9c93b18ffdf6103b55917057172a3843fa182_prof);

        
        $__internal_a5393ba3611eb0ad9daf75e3dac4475ec175ac33743b4293955ee9c8ac0a9127->leave($__internal_a5393ba3611eb0ad9daf75e3dac4475ec175ac33743b4293955ee9c8ac0a9127_prof);

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
