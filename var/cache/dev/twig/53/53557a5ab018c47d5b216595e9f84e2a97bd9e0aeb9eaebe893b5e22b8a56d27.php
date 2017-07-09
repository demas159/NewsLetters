<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_596134ad84a45d3a703ef1c943d6679f4d623e85895794760a3bbcf0e91e4958 extends Twig_Template
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
        $__internal_4cd71fa4dc6fa800fb3ab56e7cc1130115e41abfe44d73eb135eb3e92c24acf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cd71fa4dc6fa800fb3ab56e7cc1130115e41abfe44d73eb135eb3e92c24acf6->enter($__internal_4cd71fa4dc6fa800fb3ab56e7cc1130115e41abfe44d73eb135eb3e92c24acf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_8bdb0b7f7463913680baf8d41685af52cc5433d450938224123db238b49447d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bdb0b7f7463913680baf8d41685af52cc5433d450938224123db238b49447d8->enter($__internal_8bdb0b7f7463913680baf8d41685af52cc5433d450938224123db238b49447d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cd71fa4dc6fa800fb3ab56e7cc1130115e41abfe44d73eb135eb3e92c24acf6->leave($__internal_4cd71fa4dc6fa800fb3ab56e7cc1130115e41abfe44d73eb135eb3e92c24acf6_prof);

        
        $__internal_8bdb0b7f7463913680baf8d41685af52cc5433d450938224123db238b49447d8->leave($__internal_8bdb0b7f7463913680baf8d41685af52cc5433d450938224123db238b49447d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2efd96270842a9b5c10b259baab45381318387d8694ccf133f4813ed7339082a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2efd96270842a9b5c10b259baab45381318387d8694ccf133f4813ed7339082a->enter($__internal_2efd96270842a9b5c10b259baab45381318387d8694ccf133f4813ed7339082a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3a1ffe35a2b2e0e685ba37e98c03107929a95d99cfe6140396a90b2c9d8772f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1ffe35a2b2e0e685ba37e98c03107929a95d99cfe6140396a90b2c9d8772f1->enter($__internal_3a1ffe35a2b2e0e685ba37e98c03107929a95d99cfe6140396a90b2c9d8772f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3a1ffe35a2b2e0e685ba37e98c03107929a95d99cfe6140396a90b2c9d8772f1->leave($__internal_3a1ffe35a2b2e0e685ba37e98c03107929a95d99cfe6140396a90b2c9d8772f1_prof);

        
        $__internal_2efd96270842a9b5c10b259baab45381318387d8694ccf133f4813ed7339082a->leave($__internal_2efd96270842a9b5c10b259baab45381318387d8694ccf133f4813ed7339082a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_781282dbeff408a6f845eaffbd6c901842fc2c45c21e7ceeb89dfdba800fc6c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781282dbeff408a6f845eaffbd6c901842fc2c45c21e7ceeb89dfdba800fc6c1->enter($__internal_781282dbeff408a6f845eaffbd6c901842fc2c45c21e7ceeb89dfdba800fc6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f7d857036eb98874eb91942835c57af12532e6e2b235bb4e8fc26d2fd8e38f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d857036eb98874eb91942835c57af12532e6e2b235bb4e8fc26d2fd8e38f4c->enter($__internal_f7d857036eb98874eb91942835c57af12532e6e2b235bb4e8fc26d2fd8e38f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f7d857036eb98874eb91942835c57af12532e6e2b235bb4e8fc26d2fd8e38f4c->leave($__internal_f7d857036eb98874eb91942835c57af12532e6e2b235bb4e8fc26d2fd8e38f4c_prof);

        
        $__internal_781282dbeff408a6f845eaffbd6c901842fc2c45c21e7ceeb89dfdba800fc6c1->leave($__internal_781282dbeff408a6f845eaffbd6c901842fc2c45c21e7ceeb89dfdba800fc6c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5cb58aeec5b9be465c0475ed79c11b899888a96bb5f298c9cf7411e38fe6f7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cb58aeec5b9be465c0475ed79c11b899888a96bb5f298c9cf7411e38fe6f7ba->enter($__internal_5cb58aeec5b9be465c0475ed79c11b899888a96bb5f298c9cf7411e38fe6f7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_13eff712f2486ba940fe018878c244a506888ce15aec18c724053f9f01128a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13eff712f2486ba940fe018878c244a506888ce15aec18c724053f9f01128a81->enter($__internal_13eff712f2486ba940fe018878c244a506888ce15aec18c724053f9f01128a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_13eff712f2486ba940fe018878c244a506888ce15aec18c724053f9f01128a81->leave($__internal_13eff712f2486ba940fe018878c244a506888ce15aec18c724053f9f01128a81_prof);

        
        $__internal_5cb58aeec5b9be465c0475ed79c11b899888a96bb5f298c9cf7411e38fe6f7ba->leave($__internal_5cb58aeec5b9be465c0475ed79c11b899888a96bb5f298c9cf7411e38fe6f7ba_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
", "@WebProfiler/Collector/router.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
