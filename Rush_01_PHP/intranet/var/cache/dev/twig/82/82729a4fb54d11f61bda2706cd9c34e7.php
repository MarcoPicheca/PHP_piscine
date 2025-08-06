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

/* chat/index.html.twig */
class __TwigTemplate_d28c0d4bb433eaa0a93738cc2d54c5e1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

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

        yield " ";
        yield from $this->yieldParentBlock("title", $context, $blocks);
        yield " | Chat";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat-main.css"), "html", null, true);
        yield "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        yield "
";
        // line 13
        yield from $this->load("components/navbar.html.twig", 13)->unwrap()->yield($context);
        // line 14
        yield "
<div class=\"chat-container\">
    <div class=\"chat-sidebar\">
        <h3>Chat</h3>
        <div class=\"chat-tabs\">
            <button class=\"tab-btn active\" data-tab=\"conversations\">Conversations</button>
            <button class=\"tab-btn\" data-tab=\"users\">Users</button>
        </div>
        
        <div id=\"conversations-tab\" class=\"tab-content active\">
            <div class=\"conversations-list\">
            </div>
        </div>
        
        <div id=\"users-tab\" class=\"tab-content\">
            <div class=\"users-search\">
                <input type=\"text\" id=\"user-search\" placeholder=\"Find users...\">
                <div id=\"users-list\" class=\"users-list\">
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"chat-main\">
        <div id=\"chat-header\" class=\"chat-header\">
            <span>Select a conversation</span>
        </div>
        
        <div id=\"chat-messages\" class=\"chat-messages\">
            <div class=\"no-chat-selected\">
                <p>Select a user or a conversation to start chatting</p>
            </div>
        </div>
        
        <div id=\"chat-input-container\" class=\"chat-input\" style=\"display: none;\">
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
</div>

<script>
    window.chatConfig = {
        currentUserId: ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "
    };
</script>
<script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chat-main.js"), "html", null, true);
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
        return "chat/index.html.twig";
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
        return array (  176 => 67,  170 => 64,  118 => 14,  116 => 13,  113 => 12,  103 => 11,  93 => 8,  88 => 7,  78 => 6,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{parent()}} | Chat{% endblock %}


{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/chat-main.css') }}\">
{% endblock %}

{% block body %}

{% include 'components/navbar.html.twig' %}

<div class=\"chat-container\">
    <div class=\"chat-sidebar\">
        <h3>Chat</h3>
        <div class=\"chat-tabs\">
            <button class=\"tab-btn active\" data-tab=\"conversations\">Conversations</button>
            <button class=\"tab-btn\" data-tab=\"users\">Users</button>
        </div>
        
        <div id=\"conversations-tab\" class=\"tab-content active\">
            <div class=\"conversations-list\">
            </div>
        </div>
        
        <div id=\"users-tab\" class=\"tab-content\">
            <div class=\"users-search\">
                <input type=\"text\" id=\"user-search\" placeholder=\"Find users...\">
                <div id=\"users-list\" class=\"users-list\">
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"chat-main\">
        <div id=\"chat-header\" class=\"chat-header\">
            <span>Select a conversation</span>
        </div>
        
        <div id=\"chat-messages\" class=\"chat-messages\">
            <div class=\"no-chat-selected\">
                <p>Select a user or a conversation to start chatting</p>
            </div>
        </div>
        
        <div id=\"chat-input-container\" class=\"chat-input\" style=\"display: none;\">
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
</div>

<script>
    window.chatConfig = {
        currentUserId: {{ app.user.id }}
    };
</script>
<script src=\"{{ asset('js/chat-main.js') }}\"></script>
{% endblock %}
", "chat/index.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/chat/index.html.twig");
    }
}
