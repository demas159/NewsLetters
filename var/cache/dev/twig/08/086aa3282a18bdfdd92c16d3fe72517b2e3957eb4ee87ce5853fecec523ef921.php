<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_91f23d26d1e9c4d15bd74abc1f548fe71498140eaf4fd2e477e058e8a9bd1df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f6cb8f99181673e0938b8a02e07c2343c3b1cbe83a2b53b4dbcb4680a9a8fc67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6cb8f99181673e0938b8a02e07c2343c3b1cbe83a2b53b4dbcb4680a9a8fc67->enter($__internal_f6cb8f99181673e0938b8a02e07c2343c3b1cbe83a2b53b4dbcb4680a9a8fc67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d0174789b3df61e60f83f1270114593c84209a397267e0c449b3d6632dd2e085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0174789b3df61e60f83f1270114593c84209a397267e0c449b3d6632dd2e085->enter($__internal_d0174789b3df61e60f83f1270114593c84209a397267e0c449b3d6632dd2e085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6cb8f99181673e0938b8a02e07c2343c3b1cbe83a2b53b4dbcb4680a9a8fc67->leave($__internal_f6cb8f99181673e0938b8a02e07c2343c3b1cbe83a2b53b4dbcb4680a9a8fc67_prof);

        
        $__internal_d0174789b3df61e60f83f1270114593c84209a397267e0c449b3d6632dd2e085->leave($__internal_d0174789b3df61e60f83f1270114593c84209a397267e0c449b3d6632dd2e085_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7c8b6d5bedcbe86479bd6d35ee4fbf57e35a63fb9737a89ce95b5bffd8ff8e3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c8b6d5bedcbe86479bd6d35ee4fbf57e35a63fb9737a89ce95b5bffd8ff8e3b->enter($__internal_7c8b6d5bedcbe86479bd6d35ee4fbf57e35a63fb9737a89ce95b5bffd8ff8e3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_31480112de61d6d2c9b8ae2d48e613477a10f95fed98dc4d12a76e07b517a6b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31480112de61d6d2c9b8ae2d48e613477a10f95fed98dc4d12a76e07b517a6b3->enter($__internal_31480112de61d6d2c9b8ae2d48e613477a10f95fed98dc4d12a76e07b517a6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_31480112de61d6d2c9b8ae2d48e613477a10f95fed98dc4d12a76e07b517a6b3->leave($__internal_31480112de61d6d2c9b8ae2d48e613477a10f95fed98dc4d12a76e07b517a6b3_prof);

        
        $__internal_7c8b6d5bedcbe86479bd6d35ee4fbf57e35a63fb9737a89ce95b5bffd8ff8e3b->leave($__internal_7c8b6d5bedcbe86479bd6d35ee4fbf57e35a63fb9737a89ce95b5bffd8ff8e3b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c30350ca5f55f912cb96484b8a86679fd53e3c7c966c24de19288a2baf709b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c30350ca5f55f912cb96484b8a86679fd53e3c7c966c24de19288a2baf709b6d->enter($__internal_c30350ca5f55f912cb96484b8a86679fd53e3c7c966c24de19288a2baf709b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5cb548d70bf24b932e44494eed4c12505e3ed890e944b9714633f3e41ad5169d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cb548d70bf24b932e44494eed4c12505e3ed890e944b9714633f3e41ad5169d->enter($__internal_5cb548d70bf24b932e44494eed4c12505e3ed890e944b9714633f3e41ad5169d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5cb548d70bf24b932e44494eed4c12505e3ed890e944b9714633f3e41ad5169d->leave($__internal_5cb548d70bf24b932e44494eed4c12505e3ed890e944b9714633f3e41ad5169d_prof);

        
        $__internal_c30350ca5f55f912cb96484b8a86679fd53e3c7c966c24de19288a2baf709b6d->leave($__internal_c30350ca5f55f912cb96484b8a86679fd53e3c7c966c24de19288a2baf709b6d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8e479436c255d857cd0ba44c15b0ccbfcbeeee6ce13073e506bf912d60c5a4f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e479436c255d857cd0ba44c15b0ccbfcbeeee6ce13073e506bf912d60c5a4f2->enter($__internal_8e479436c255d857cd0ba44c15b0ccbfcbeeee6ce13073e506bf912d60c5a4f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_27a608d35604f1370258688b802326715fb9127fa4d999546b14d2a18dd64dec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a608d35604f1370258688b802326715fb9127fa4d999546b14d2a18dd64dec->enter($__internal_27a608d35604f1370258688b802326715fb9127fa4d999546b14d2a18dd64dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_27a608d35604f1370258688b802326715fb9127fa4d999546b14d2a18dd64dec->leave($__internal_27a608d35604f1370258688b802326715fb9127fa4d999546b14d2a18dd64dec_prof);

        
        $__internal_8e479436c255d857cd0ba44c15b0ccbfcbeeee6ce13073e506bf912d60c5a4f2->leave($__internal_8e479436c255d857cd0ba44c15b0ccbfcbeeee6ce13073e506bf912d60c5a4f2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
