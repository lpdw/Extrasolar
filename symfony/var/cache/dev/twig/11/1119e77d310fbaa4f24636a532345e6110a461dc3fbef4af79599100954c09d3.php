<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_71904bd48f890b43211fd428960caeb30288a22fbe9febde8d73bcb426d07a5b extends Twig_Template
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
<<<<<<< HEAD
        $__internal_1d3f6d7b2548cb81c4a51225096baa70141579af7dc40b5398be9ed38929a896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d3f6d7b2548cb81c4a51225096baa70141579af7dc40b5398be9ed38929a896->enter($__internal_1d3f6d7b2548cb81c4a51225096baa70141579af7dc40b5398be9ed38929a896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_a8f3a7d3be4871c240adfcca67db8c7e1e99985beecac492de52082f7ad1ee6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8f3a7d3be4871c240adfcca67db8c7e1e99985beecac492de52082f7ad1ee6e->enter($__internal_a8f3a7d3be4871c240adfcca67db8c7e1e99985beecac492de52082f7ad1ee6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
=======
        $__internal_eb17ae16a00913ef6a3a379b2bc49784dd3be075cb4ceeda4c491cdd8aab4e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb17ae16a00913ef6a3a379b2bc49784dd3be075cb4ceeda4c491cdd8aab4e33->enter($__internal_eb17ae16a00913ef6a3a379b2bc49784dd3be075cb4ceeda4c491cdd8aab4e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_39c6fa3d93e42e1830b38990be27666d34992f939c7a614bf418598af07ecaa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c6fa3d93e42e1830b38990be27666d34992f939c7a614bf418598af07ecaa2->enter($__internal_39c6fa3d93e42e1830b38990be27666d34992f939c7a614bf418598af07ecaa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
<<<<<<< HEAD
        $__internal_1d3f6d7b2548cb81c4a51225096baa70141579af7dc40b5398be9ed38929a896->leave($__internal_1d3f6d7b2548cb81c4a51225096baa70141579af7dc40b5398be9ed38929a896_prof);

        
        $__internal_a8f3a7d3be4871c240adfcca67db8c7e1e99985beecac492de52082f7ad1ee6e->leave($__internal_a8f3a7d3be4871c240adfcca67db8c7e1e99985beecac492de52082f7ad1ee6e_prof);
=======
        $__internal_eb17ae16a00913ef6a3a379b2bc49784dd3be075cb4ceeda4c491cdd8aab4e33->leave($__internal_eb17ae16a00913ef6a3a379b2bc49784dd3be075cb4ceeda4c491cdd8aab4e33_prof);

        
        $__internal_39c6fa3d93e42e1830b38990be27666d34992f939c7a614bf418598af07ecaa2->leave($__internal_39c6fa3d93e42e1830b38990be27666d34992f939c7a614bf418598af07ecaa2_prof);
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
