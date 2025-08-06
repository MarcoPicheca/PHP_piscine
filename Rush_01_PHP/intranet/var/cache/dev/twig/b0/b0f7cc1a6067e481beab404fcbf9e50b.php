<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* chat/private.html.twig */
class __TwigTemplate_4ec2df81debc09356c40b5fa227140c8 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/private.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Chat con ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 3, $this->source); })()), "firstName", [], "any", false, false, false, 3), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 3, $this->source); })()), "lastName", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat-private.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        yield "
";
        // line 12
        yield from $this->load("components/navbar.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "
<div class=\"chat-container\">
    <div class=\"chat-header\">
        <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_index");
        yield "\" class=\"back-btn\">← Return to chat</a>
        <h2>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 17, $this->source); })()), "firstName", [], "any", false, false, false, 17), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 17, $this->source); })()), "lastName", [], "any", false, false, false, 17), "html", null, true);
        yield "</h2>
    </div>

    <div id=\"chat-messages\" class=\"chat-messages\">
    </div>
    
    <div class=\"chat-input\">
        <form id=\"chat-form\" enctype=\"multipart/form-data\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"message-input\" placeholder=\"Type a message...\" maxlength=\"1000\">
                <input type=\"file\" id=\"media-input\" accept=\"image/*,video/*,audio/*,.pdf,.doc,.docx\" style=\"display: none;\">
                <button type=\"button\" id=\"media-btn\" class=\"media-btn\" title=\"Attach file\">📎</button>
                <button type=\"submit\">Send</button>
            </div>
            <div id=\"file-preview\" class=\"file-preview\" style=\"display: none;\"></div>
        </form>
    </div>
</div>

<script>
    // Set configuration for the chat
    window.chatConfig = {
        recipientId: ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recipient"]) || array_key_exists("recipient", $context) ? $context["recipient"] : (function () { throw new RuntimeError('Variable "recipient" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        yield ",
        currentUserId: ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "
    };
</script>
<script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chat-private.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chat/private.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  165 => 43,  159 => 40,  155 => 39,  128 => 17,  124 => 16,  119 => 13,  117 => 12,  114 => 11,  104 => 10,  94 => 7,  89 => 6,  79 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chat con {{ recipient.firstName }} {{ recipient.lastName }}{% endblock %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/chat-private.css') }}\">
{% endblock %}

{% block body %}

{% include 'components/navbar.html.twig' %}

<div class=\"chat-container\">
    <div class=\"chat-header\">
        <a href=\"{{ path('chat_index') }}\" class=\"back-btn\">← Return to chat</a>
        <h2>{{ recipient.firstName }} {{ recipient.lastName }}</h2>
    </div>

    <div id=\"chat-messages\" class=\"chat-messages\">
    </div>
    
    <div class=\"chat-input\">
        <form id=\"chat-form\" enctype=\"multipart/form-data\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"message-input\" placeholder=\"Type a message...\" maxlength=\"1000\">
                <input type=\"file\" id=\"media-input\" accept=\"image/*,video/*,audio/*,.pdf,.doc,.docx\" style=\"display: none;\">
                <button type=\"button\" id=\"media-btn\" class=\"media-btn\" title=\"Attach file\">📎</button>
                <button type=\"submit\">Send</button>
            </div>
            <div id=\"file-preview\" class=\"file-preview\" style=\"display: none;\"></div>
        </form>
    </div>
</div>

<script>
    // Set configuration for the chat
    window.chatConfig = {
        recipientId: {{ recipient.id }},
        currentUserId: {{ app.user.id }}
    };
</script>
<script src=\"{{ asset('js/chat-private.js') }}\"></script>
{% endblock %}
", "chat/private.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/chat/private.html.twig");
    }
}
