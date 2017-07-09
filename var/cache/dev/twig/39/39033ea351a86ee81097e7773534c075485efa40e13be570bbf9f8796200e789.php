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
        $__internal_0b7e590a7e9707bc4f9895b3449ee1559ad196a0ba24ac65c7898a132d718d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b7e590a7e9707bc4f9895b3449ee1559ad196a0ba24ac65c7898a132d718d75->enter($__internal_0b7e590a7e9707bc4f9895b3449ee1559ad196a0ba24ac65c7898a132d718d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle:Main:admin.html.twig"));

        $__internal_6a315db200f15fa6f27dd4d946f41d46287792ca71778cad21cb9ee368bece8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a315db200f15fa6f27dd4d946f41d46287792ca71778cad21cb9ee368bece8a->enter($__internal_6a315db200f15fa6f27dd4d946f41d46287792ca71778cad21cb9ee368bece8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RytisNewsLettersBundle:Main:admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b7e590a7e9707bc4f9895b3449ee1559ad196a0ba24ac65c7898a132d718d75->leave($__internal_0b7e590a7e9707bc4f9895b3449ee1559ad196a0ba24ac65c7898a132d718d75_prof);

        
        $__internal_6a315db200f15fa6f27dd4d946f41d46287792ca71778cad21cb9ee368bece8a->leave($__internal_6a315db200f15fa6f27dd4d946f41d46287792ca71778cad21cb9ee368bece8a_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c97f7854380e589dd38e750855d6591a7aa64dde69696c510940b033ff75dfd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97f7854380e589dd38e750855d6591a7aa64dde69696c510940b033ff75dfd1->enter($__internal_c97f7854380e589dd38e750855d6591a7aa64dde69696c510940b033ff75dfd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_095ce35b5b931f1d2e0da7fbfc6121a98ee25bbe6689dde8328bfa23f6bfd120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_095ce35b5b931f1d2e0da7fbfc6121a98ee25bbe6689dde8328bfa23f6bfd120->enter($__internal_095ce35b5b931f1d2e0da7fbfc6121a98ee25bbe6689dde8328bfa23f6bfd120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_095ce35b5b931f1d2e0da7fbfc6121a98ee25bbe6689dde8328bfa23f6bfd120->leave($__internal_095ce35b5b931f1d2e0da7fbfc6121a98ee25bbe6689dde8328bfa23f6bfd120_prof);

        
        $__internal_c97f7854380e589dd38e750855d6591a7aa64dde69696c510940b033ff75dfd1->leave($__internal_c97f7854380e589dd38e750855d6591a7aa64dde69696c510940b033ff75dfd1_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_82d4e16a804807e11e4a4fd9ea69f15fd7ba15b30e4d39d9fb0df5e5f8b6c0ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d4e16a804807e11e4a4fd9ea69f15fd7ba15b30e4d39d9fb0df5e5f8b6c0ff->enter($__internal_82d4e16a804807e11e4a4fd9ea69f15fd7ba15b30e4d39d9fb0df5e5f8b6c0ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e23de92c81409232a25c74070a311057c2f7f33bc9521f5a97e82465b31aedd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e23de92c81409232a25c74070a311057c2f7f33bc9521f5a97e82465b31aedd7->enter($__internal_e23de92c81409232a25c74070a311057c2f7f33bc9521f5a97e82465b31aedd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<table id=\"table\">

<thead>
<tr>
<th>ID</th>
<th>Vardas</th>
<th>El.Paštas</th>
<th>Kategorijos</th>
<th>Data</th>
<th>Veiksmai</th>
</tr>
</thead>
    <tbody>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? $this->getContext($context, "data")));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 24
            echo "        <tr>
            <td>  ";
            // line 25
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "</td>
            <td>  ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "Name", array()), "html", null, true);
            echo "</td>
            <td>  ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "Email", array()), "html", null, true);
            echo "</td>
            <td>  ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "Categories", array()), "html", null, true);
            echo "</td>
            <td>  ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["v"], "CreatedDate", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("RytisNewsLettersBundle_AdminLoad");
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "\" class=\"EDIT\"><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a>
                <a href=\"";
            // line 32
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
        // line 36
        echo "    </tbody>
</table>

    <div id=\"dialog\" title=\"Redagavimas\">


    </div>
";
        
        $__internal_e23de92c81409232a25c74070a311057c2f7f33bc9521f5a97e82465b31aedd7->leave($__internal_e23de92c81409232a25c74070a311057c2f7f33bc9521f5a97e82465b31aedd7_prof);

        
        $__internal_82d4e16a804807e11e4a4fd9ea69f15fd7ba15b30e4d39d9fb0df5e5f8b6c0ff->leave($__internal_82d4e16a804807e11e4a4fd9ea69f15fd7ba15b30e4d39d9fb0df5e5f8b6c0ff_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_27909097887998414499a00fa97ef103cbed403bc84d3dacee44fc33c271062f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27909097887998414499a00fa97ef103cbed403bc84d3dacee44fc33c271062f->enter($__internal_27909097887998414499a00fa97ef103cbed403bc84d3dacee44fc33c271062f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4f653b96bbcd78665784590cf8114c54a6200ba49a3b6d874d83638c3480d519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f653b96bbcd78665784590cf8114c54a6200ba49a3b6d874d83638c3480d519->enter($__internal_4f653b96bbcd78665784590cf8114c54a6200ba49a3b6d874d83638c3480d519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
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
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/assets/NewsLetters/js/main.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_4f653b96bbcd78665784590cf8114c54a6200ba49a3b6d874d83638c3480d519->leave($__internal_4f653b96bbcd78665784590cf8114c54a6200ba49a3b6d874d83638c3480d519_prof);

        
        $__internal_27909097887998414499a00fa97ef103cbed403bc84d3dacee44fc33c271062f->leave($__internal_27909097887998414499a00fa97ef103cbed403bc84d3dacee44fc33c271062f_prof);

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
        return array (  187 => 65,  167 => 47,  158 => 46,  141 => 36,  129 => 32,  123 => 31,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  99 => 24,  95 => 23,  79 => 9,  70 => 8,  58 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
<th>Data</th>
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
            <td>  {{ v.CreatedDate }}</td>
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
