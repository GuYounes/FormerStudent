<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_5543a68232411567850f47b37500dea4ee3cdba041a27e9df973efe12a5c0098 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c48589f3de0ca0c20c470cc2f8b1f0add5f6a60269b50d0dc5d23dba9f125f70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48589f3de0ca0c20c470cc2f8b1f0add5f6a60269b50d0dc5d23dba9f125f70->enter($__internal_c48589f3de0ca0c20c470cc2f8b1f0add5f6a60269b50d0dc5d23dba9f125f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_aab118c6c6426bb4e05ac01e41e9737192070710641fa9b8810d52fd66b57a91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab118c6c6426bb4e05ac01e41e9737192070710641fa9b8810d52fd66b57a91->enter($__internal_aab118c6c6426bb4e05ac01e41e9737192070710641fa9b8810d52fd66b57a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_c48589f3de0ca0c20c470cc2f8b1f0add5f6a60269b50d0dc5d23dba9f125f70->leave($__internal_c48589f3de0ca0c20c470cc2f8b1f0add5f6a60269b50d0dc5d23dba9f125f70_prof);

        
        $__internal_aab118c6c6426bb4e05ac01e41e9737192070710641fa9b8810d52fd66b57a91->leave($__internal_aab118c6c6426bb4e05ac01e41e9737192070710641fa9b8810d52fd66b57a91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "C:\\xampp\\htdocs\\FormerDUTStudents\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\textarea_widget.html.php");
    }
}
