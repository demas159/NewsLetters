<?php

/* RytisNewsLettersBundle::layout.html.twig */
class __TwigTemplate_40e13a1b5939172cedf036ebec664e382a65b4acf78dc1e4d553477a0e383d03 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "RytisNewsLettersBundle::layout.html.twig", 2);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_537b0d88fbd00196efab20602899f4143c18e7712787de6eba34fda9b857399d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_537b0d88fbd00196efab20602899f4143c18e7712787de6eba34fda9b857399d->enter($__internal_537b0d88fbd00196efab20602899f4143c18e7712787de6eba34fda9b857399d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle::layout.html.twig"));

        $__internal_dd91df2c996bd390b7fe5f9a3d07433d558dafe0bf21fc0dfe17985ea8ca23c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd91df2c996bd390b7fe5f9a3d07433d558dafe0bf21fc0dfe17985ea8ca23c1->enter($__internal_dd91df2c996bd390b7fe5f9a3d07433d558dafe0bf21fc0dfe17985ea8ca23c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_537b0d88fbd00196efab20602899f4143c18e7712787de6eba34fda9b857399d->leave($__internal_537b0d88fbd00196efab20602899f4143c18e7712787de6eba34fda9b857399d_prof);

        
        $__internal_dd91df2c996bd390b7fe5f9a3d07433d558dafe0bf21fc0dfe17985ea8ca23c1->leave($__internal_dd91df2c996bd390b7fe5f9a3d07433d558dafe0bf21fc0dfe17985ea8ca23c1_prof);

    }

    public function getTemplateName()
    {
        return "RytisNewsLettersBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}


", "RytisNewsLettersBundle::layout.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\src\\Rytis\\NewsLettersBundle/Resources/views/layout.html.twig");
    }
}
