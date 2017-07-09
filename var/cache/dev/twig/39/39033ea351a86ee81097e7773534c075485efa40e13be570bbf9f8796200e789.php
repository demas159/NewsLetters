<?php

/* RytisNewsLettersBundle:Main:admin.html.twig */
class __TwigTemplate_bd62611c5d422fac1433b885ff81645048fea6533acba1c32a0589470ababeae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RytisNewsLettersBundle::layout.html.twig", "RytisNewsLettersBundle:Main:admin.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RytisNewsLettersBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b1b5cba0d01dbd4c48e9cdfeefa9f031f31f2bac258846cbb63b79e80cfd0bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b1b5cba0d01dbd4c48e9cdfeefa9f031f31f2bac258846cbb63b79e80cfd0bd->enter($__internal_0b1b5cba0d01dbd4c48e9cdfeefa9f031f31f2bac258846cbb63b79e80cfd0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle:Main:admin.html.twig"));

        $__internal_f67b6f1b1ce1473c253ab1cd9432865651ab2afe1b5cd2e65addd0813f8083eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f67b6f1b1ce1473c253ab1cd9432865651ab2afe1b5cd2e65addd0813f8083eb->enter($__internal_f67b6f1b1ce1473c253ab1cd9432865651ab2afe1b5cd2e65addd0813f8083eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle:Main:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b1b5cba0d01dbd4c48e9cdfeefa9f031f31f2bac258846cbb63b79e80cfd0bd->leave($__internal_0b1b5cba0d01dbd4c48e9cdfeefa9f031f31f2bac258846cbb63b79e80cfd0bd_prof);

        
        $__internal_f67b6f1b1ce1473c253ab1cd9432865651ab2afe1b5cd2e65addd0813f8083eb->leave($__internal_f67b6f1b1ce1473c253ab1cd9432865651ab2afe1b5cd2e65addd0813f8083eb_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_dc061b3ef2e41db3c20394640a3d00077040b214e88daa0ab638672fd9aa5506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc061b3ef2e41db3c20394640a3d00077040b214e88daa0ab638672fd9aa5506->enter($__internal_dc061b3ef2e41db3c20394640a3d00077040b214e88daa0ab638672fd9aa5506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_9f6cdb18e577ee39b464f23dd132c5173ac6ba82c81cfdebc359e95df6fbaf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6cdb18e577ee39b464f23dd132c5173ac6ba82c81cfdebc359e95df6fbaf36->enter($__internal_9f6cdb18e577ee39b464f23dd132c5173ac6ba82c81cfdebc359e95df6fbaf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"http://anijs.github.io/lib/anicollection/anicollection.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.4/dt-1.10.15/af-2.2.0/r-2.1.1/sc-1.4.2/datatables.min.css\"/>
    <link rel=\"stylesheet\" href='";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/NewsLetters/css/NewsLettersCss.css"), "html", null, true);
        echo "'>
";
        
        $__internal_9f6cdb18e577ee39b464f23dd132c5173ac6ba82c81cfdebc359e95df6fbaf36->leave($__internal_9f6cdb18e577ee39b464f23dd132c5173ac6ba82c81cfdebc359e95df6fbaf36_prof);

        
        $__internal_dc061b3ef2e41db3c20394640a3d00077040b214e88daa0ab638672fd9aa5506->leave($__internal_dc061b3ef2e41db3c20394640a3d00077040b214e88daa0ab638672fd9aa5506_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_51a73993f28c9f388b06a9497f01ff72e25c549175ef58bfe8dd4ba2ef430427 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a73993f28c9f388b06a9497f01ff72e25c549175ef58bfe8dd4ba2ef430427->enter($__internal_51a73993f28c9f388b06a9497f01ff72e25c549175ef58bfe8dd4ba2ef430427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_547abc22dd1397bc4efc7a7ea7aeeba8f397b824ceefe0fe80681970593cc2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547abc22dd1397bc4efc7a7ea7aeeba8f397b824ceefe0fe80681970593cc2f9->enter($__internal_547abc22dd1397bc4efc7a7ea7aeeba8f397b824ceefe0fe80681970593cc2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<table id=\"table\">

<thead>
<tr>
<th>ID</th>
<th>Vardas</th>
<th>El.Paštas</th>
<th>Kategorijos</th>
<th>Veiksmai</th>
</tr>
</thead>
    <tbody>
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 23
            echo "        <tr>
            <td>  ";
            // line 24
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</td>
            <td>  ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "Name", array()), "html", null, true);
            echo "</td>
            <td>  ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "Email", array()), "html", null, true);
            echo "</td>
            <td>  ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "Categories", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RytisNewsLettersBundle_AdminLoad");
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" class=\"EDIT\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                <a href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RytisNewsLettersBundle_AdminDelete");
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" class=\"DELETE\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></i></a>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </tbody>
</table>

    <div id=\"dialog\" title=\"Redagavimas\">


    </div>
";
        
        $__internal_547abc22dd1397bc4efc7a7ea7aeeba8f397b824ceefe0fe80681970593cc2f9->leave($__internal_547abc22dd1397bc4efc7a7ea7aeeba8f397b824ceefe0fe80681970593cc2f9_prof);

        
        $__internal_51a73993f28c9f388b06a9497f01ff72e25c549175ef58bfe8dd4ba2ef430427->leave($__internal_51a73993f28c9f388b06a9497f01ff72e25c549175ef58bfe8dd4ba2ef430427_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8a99ec38e39f624398ee0f71665777cf384a35ccffcc01435048f292f92abbab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a99ec38e39f624398ee0f71665777cf384a35ccffcc01435048f292f92abbab->enter($__internal_8a99ec38e39f624398ee0f71665777cf384a35ccffcc01435048f292f92abbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d7fafde7bee36db9177c7260d447fab157ba287a35e20f81030654c3691450d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7fafde7bee36db9177c7260d447fab157ba287a35e20f81030654c3691450d9->enter($__internal_d7fafde7bee36db9177c7260d447fab157ba287a35e20f81030654c3691450d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "    <script
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>

    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.4/dt-1.10.15/af-2.2.0/r-2.1.1/sc-1.4.2/datatables.min.js\"></script>
    <script src=\"https://use.fontawesome.com/5d8b48cf54.js\"></script>
   <script>\$(document).ready(function() {
           \$('#table').DataTable( {
               'paging' : false,
               \"ordering\": true,
           } );
       } );
       \$('#dialog').dialog({
           autoOpen: false,
           width:\"350px\"
       });
   </script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/NewsLetters/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_d7fafde7bee36db9177c7260d447fab157ba287a35e20f81030654c3691450d9->leave($__internal_d7fafde7bee36db9177c7260d447fab157ba287a35e20f81030654c3691450d9_prof);

        
        $__internal_8a99ec38e39f624398ee0f71665777cf384a35ccffcc01435048f292f92abbab->leave($__internal_8a99ec38e39f624398ee0f71665777cf384a35ccffcc01435048f292f92abbab_prof);

    }

    public function getTemplateName()
    {
        return "RytisNewsLettersBundle:Main:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 63,  162 => 45,  153 => 44,  136 => 34,  124 => 30,  118 => 29,  113 => 27,  109 => 26,  105 => 25,  101 => 24,  98 => 23,  94 => 22,  79 => 9,  70 => 8,  58 => 6,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'RytisNewsLettersBundle::layout.html.twig' %}
{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"http://anijs.github.io/lib/anicollection/anicollection.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.4/dt-1.10.15/af-2.2.0/r-2.1.1/sc-1.4.2/datatables.min.css\"/>
    <link rel=\"stylesheet\" href='{{ asset(\"/assets/NewsLetters/css/NewsLettersCss.css\") }}'>
{% endblock %}
{% block body %}

<table id=\"table\">

<thead>
<tr>
<th>ID</th>
<th>Vardas</th>
<th>El.Paštas</th>
<th>Kategorijos</th>
<th>Veiksmai</th>
</tr>
</thead>
    <tbody>
    {% for k, v in data %}
        <tr>
            <td>  {{ k }}</td>
            <td>  {{ v.Name }}</td>
            <td>  {{ v.Email }}</td>
            <td>  {{ v.Categories }}</td>
            <td>
                <a href=\"{{ path('RytisNewsLettersBundle_AdminLoad') }}\" id=\"{{ k }}\" class=\"EDIT\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                <a href=\"{{ path('RytisNewsLettersBundle_AdminDelete') }}\" id=\"{{ k }}\" class=\"DELETE\"><i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i></i></a>
            </td>
        </tr>
    {%   endfor %}
    </tbody>
</table>

    <div id=\"dialog\" title=\"Redagavimas\">


    </div>
{% endblock %}


{% block javascripts %}
    <script
            src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
            integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
            crossorigin=\"anonymous\"></script>

    <script type=\"text/javascript\" src=\"https://cdn.datatables.net/v/ju-1.11.4/jq-2.2.4/dt-1.10.15/af-2.2.0/r-2.1.1/sc-1.4.2/datatables.min.js\"></script>
    <script src=\"https://use.fontawesome.com/5d8b48cf54.js\"></script>
   <script>\$(document).ready(function() {
           \$('#table').DataTable( {
               'paging' : false,
               \"ordering\": true,
           } );
       } );
       \$('#dialog').dialog({
           autoOpen: false,
           width:\"350px\"
       });
   </script>
    <script src=\"{{ asset('/assets/NewsLetters/js/main.js') }}\"></script>
{% endblock %}
", "RytisNewsLettersBundle:Main:admin.html.twig", "G:\\OpenServer\\OpenServer\\domains\\uzduotis.lt\\src\\Rytis\\NewsLettersBundle/Resources/views/Main/admin.html.twig");
    }
}
