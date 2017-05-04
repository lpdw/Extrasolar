<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_9de49696a73a386b9c821b40cea7a17a854c6b86cb5a31903eacce4d1bc730fc extends Twig_Template
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
        $__internal_e59aa249e31d69354575ac1cc9ef4c696a1cfa353597dc17e2dba596b01e4218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59aa249e31d69354575ac1cc9ef4c696a1cfa353597dc17e2dba596b01e4218->enter($__internal_e59aa249e31d69354575ac1cc9ef4c696a1cfa353597dc17e2dba596b01e4218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_1c906c91ff70df14bda3eb38fd1c62bd2a1c6bba45bb92bc981e2de08cfaa819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c906c91ff70df14bda3eb38fd1c62bd2a1c6bba45bb92bc981e2de08cfaa819->enter($__internal_1c906c91ff70df14bda3eb38fd1c62bd2a1c6bba45bb92bc981e2de08cfaa819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
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
        
        $__internal_e59aa249e31d69354575ac1cc9ef4c696a1cfa353597dc17e2dba596b01e4218->leave($__internal_e59aa249e31d69354575ac1cc9ef4c696a1cfa353597dc17e2dba596b01e4218_prof);

        
        $__internal_1c906c91ff70df14bda3eb38fd1c62bd2a1c6bba45bb92bc981e2de08cfaa819->leave($__internal_1c906c91ff70df14bda3eb38fd1c62bd2a1c6bba45bb92bc981e2de08cfaa819_prof);

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
", "@Twig/Exception/traces.txt.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
