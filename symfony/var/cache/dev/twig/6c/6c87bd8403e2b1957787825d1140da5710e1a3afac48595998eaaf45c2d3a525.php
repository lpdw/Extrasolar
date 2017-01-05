<?php

/* @Twig/Exception/logs.html.twig */
class __TwigTemplate_4795e56cf30013036d7f12a29fcc7bccd25063074e3a982d46fb44c29288aa54 extends Twig_Template
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
        $__internal_f7480006940eb88b0468001d798fe9f2cb664514ed8d8867fce84ce893075ef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7480006940eb88b0468001d798fe9f2cb664514ed8d8867fce84ce893075ef7->enter($__internal_f7480006940eb88b0468001d798fe9f2cb664514ed8d8867fce84ce893075ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_f331ace252ce13b8784bbccf4e25130c98e0e72fcf749fa62d958675b0f6ad12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f331ace252ce13b8784bbccf4e25130c98e0e72fcf749fa62d958675b0f6ad12->enter($__internal_f331ace252ce13b8784bbccf4e25130c98e0e72fcf749fa62d958675b0f6ad12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
=======
        $__internal_f90419b586c01271d717ff0e7e5524907b6ef76a949ff3a2c49cc7d1f418b426 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f90419b586c01271d717ff0e7e5524907b6ef76a949ff3a2c49cc7d1f418b426->enter($__internal_f90419b586c01271d717ff0e7e5524907b6ef76a949ff3a2c49cc7d1f418b426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));

        $__internal_d3c24182ebebcc868e97e9091acba79a4d82144a21841375a155688e6a2b05ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c24182ebebcc868e97e9091acba79a4d82144a21841375a155688e6a2b05ba->enter($__internal_d3c24182ebebcc868e97e9091acba79a4d82144a21841375a155688e6a2b05ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/logs.html.twig"));
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

        // line 1
        echo "<ol class=\"traces logs\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["logs"] ?? $this->getContext($context, "logs")));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 3
            echo "        <li";
            if (($this->getAttribute($context["log"], "priority", array()) >= 400)) {
                echo " class=\"error\"";
            } elseif (($this->getAttribute($context["log"], "priority", array()) >= 300)) {
                echo " class=\"warning\"";
            }
            echo ">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "priorityName", array()), "html", null, true);
            echo " - ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatLogMessage($this->getAttribute($context["log"], "message", array()), $this->getAttribute($context["log"], "context", array()));
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ol>
";
        
<<<<<<< HEAD
        $__internal_f7480006940eb88b0468001d798fe9f2cb664514ed8d8867fce84ce893075ef7->leave($__internal_f7480006940eb88b0468001d798fe9f2cb664514ed8d8867fce84ce893075ef7_prof);

        
        $__internal_f331ace252ce13b8784bbccf4e25130c98e0e72fcf749fa62d958675b0f6ad12->leave($__internal_f331ace252ce13b8784bbccf4e25130c98e0e72fcf749fa62d958675b0f6ad12_prof);
=======
        $__internal_f90419b586c01271d717ff0e7e5524907b6ef76a949ff3a2c49cc7d1f418b426->leave($__internal_f90419b586c01271d717ff0e7e5524907b6ef76a949ff3a2c49cc7d1f418b426_prof);

        
        $__internal_d3c24182ebebcc868e97e9091acba79a4d82144a21841375a155688e6a2b05ba->leave($__internal_d3c24182ebebcc868e97e9091acba79a4d82144a21841375a155688e6a2b05ba_prof);
>>>>>>> 305a5c83807d551c85ea4575bf6b100c3f8213a3

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  41 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"traces logs\">
    {% for log in logs %}
        <li{% if log.priority >= 400 %} class=\"error\"{% elseif log.priority >= 300 %} class=\"warning\"{% endif %}>
            {{ log.priorityName }} - {{ log.message|format_log_message(log.context) }}
        </li>
    {% endfor %}
</ol>
", "@Twig/Exception/logs.html.twig", "/Applications/MAMP/htdocs/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/logs.html.twig");
    }
}
