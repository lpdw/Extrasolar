<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eff1da6d2f623451a1dd082e6101fb005d01f274ff0c3875bedd0d5f4aff284b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_73f6b749ebdc4ad6412913c1c1df083ce8cae31e134cd55d21b94c3c207c5bbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73f6b749ebdc4ad6412913c1c1df083ce8cae31e134cd55d21b94c3c207c5bbf->enter($__internal_73f6b749ebdc4ad6412913c1c1df083ce8cae31e134cd55d21b94c3c207c5bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_acbfdf7314c450ce3ca6b5c1fedc5a9fac48826d1fbad9725b462ac6b106107d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acbfdf7314c450ce3ca6b5c1fedc5a9fac48826d1fbad9725b462ac6b106107d->enter($__internal_acbfdf7314c450ce3ca6b5c1fedc5a9fac48826d1fbad9725b462ac6b106107d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73f6b749ebdc4ad6412913c1c1df083ce8cae31e134cd55d21b94c3c207c5bbf->leave($__internal_73f6b749ebdc4ad6412913c1c1df083ce8cae31e134cd55d21b94c3c207c5bbf_prof);

        
        $__internal_acbfdf7314c450ce3ca6b5c1fedc5a9fac48826d1fbad9725b462ac6b106107d->leave($__internal_acbfdf7314c450ce3ca6b5c1fedc5a9fac48826d1fbad9725b462ac6b106107d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ded898765e6c42577d0b7ae25bec428b9abde32b98abde90873046471bd90de2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ded898765e6c42577d0b7ae25bec428b9abde32b98abde90873046471bd90de2->enter($__internal_ded898765e6c42577d0b7ae25bec428b9abde32b98abde90873046471bd90de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_28a3446f0ef034b3e8b6d29bad16f2caa4a3e1d275c17ba9540dbf15ba1a01ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28a3446f0ef034b3e8b6d29bad16f2caa4a3e1d275c17ba9540dbf15ba1a01ec->enter($__internal_28a3446f0ef034b3e8b6d29bad16f2caa4a3e1d275c17ba9540dbf15ba1a01ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_28a3446f0ef034b3e8b6d29bad16f2caa4a3e1d275c17ba9540dbf15ba1a01ec->leave($__internal_28a3446f0ef034b3e8b6d29bad16f2caa4a3e1d275c17ba9540dbf15ba1a01ec_prof);

        
        $__internal_ded898765e6c42577d0b7ae25bec428b9abde32b98abde90873046471bd90de2->leave($__internal_ded898765e6c42577d0b7ae25bec428b9abde32b98abde90873046471bd90de2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_c0ca16924c8532b4a03d73473260fdcc4577a4b68e252eb0c648e84d770b04c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ca16924c8532b4a03d73473260fdcc4577a4b68e252eb0c648e84d770b04c3->enter($__internal_c0ca16924c8532b4a03d73473260fdcc4577a4b68e252eb0c648e84d770b04c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4def7b000a04a6a2c26aa569c9f729f6f186cf9d882b3b1c9aac6902a9be01fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4def7b000a04a6a2c26aa569c9f729f6f186cf9d882b3b1c9aac6902a9be01fe->enter($__internal_4def7b000a04a6a2c26aa569c9f729f6f186cf9d882b3b1c9aac6902a9be01fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4def7b000a04a6a2c26aa569c9f729f6f186cf9d882b3b1c9aac6902a9be01fe->leave($__internal_4def7b000a04a6a2c26aa569c9f729f6f186cf9d882b3b1c9aac6902a9be01fe_prof);

        
        $__internal_c0ca16924c8532b4a03d73473260fdcc4577a4b68e252eb0c648e84d770b04c3->leave($__internal_c0ca16924c8532b4a03d73473260fdcc4577a4b68e252eb0c648e84d770b04c3_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f105065a8d4364cfc4f312025bb54a332d35595c8635434efcd8539f7565c80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f105065a8d4364cfc4f312025bb54a332d35595c8635434efcd8539f7565c80->enter($__internal_6f105065a8d4364cfc4f312025bb54a332d35595c8635434efcd8539f7565c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_695164035da55031d3b497220468f70590e438675341d5e601ba6f83d41e0560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695164035da55031d3b497220468f70590e438675341d5e601ba6f83d41e0560->enter($__internal_695164035da55031d3b497220468f70590e438675341d5e601ba6f83d41e0560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_695164035da55031d3b497220468f70590e438675341d5e601ba6f83d41e0560->leave($__internal_695164035da55031d3b497220468f70590e438675341d5e601ba6f83d41e0560_prof);

        
        $__internal_6f105065a8d4364cfc4f312025bb54a332d35595c8635434efcd8539f7565c80->leave($__internal_6f105065a8d4364cfc4f312025bb54a332d35595c8635434efcd8539f7565c80_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Users/lpdw/Desktop/Extrasolar/symfony/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
