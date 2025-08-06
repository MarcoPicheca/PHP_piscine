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

/* chat/project.html.twig */
class __TwigTemplate_8fa08f4cb6333f96c962db4a222861bc extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/project.html.twig"));

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

        yield "Chat Progetto - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/chat-project.css"), "html", null, true);
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        yield "\" class=\"back-btn\">← Return to project</a>
        <h2>Chat: ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "</h2>
        <small>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 18, $this->source); })()), "userProjects", [], "any", false, false, false, 18)), "html", null, true);
        yield " participants</small>
    </div>
    
    <div id=\"chat-messages\" class=\"chat-messages\">
    </div>
    
    <div class=\"chat-input\">
        <form id=\"chat-form\" enctype=\"multipart/form-data\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"message-input\" placeholder=\"Type a message to the team...\" maxlength=\"1000\">
                <input type=\"file\" id=\"media-input\" accept=\"image/*,video/*,audio/*,.pdf,.doc,.docx\" style=\"display: none;\">
                <button type=\"button\" id=\"media-btn\" class=\"media-btn\" title=\"Attach file\">📎</button>
                <button type=\"submit\">Send</button>
            </div>
            <div id=\"file-preview\" class=\"file-preview\" style=\"display: none;\"></div>
        </form>
    </div>
</div>

<script>
    window.chatConfig = {
        projectId: ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["project"]) || array_key_exists("project", $context) ? $context["project"] : (function () { throw new RuntimeError('Variable "project" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39), "html", null, true);
        yield ",
        currentUserId: ";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
        yield "
    };
</script>
<script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chat-project.js"), "html", null, true);
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
        return "chat/project.html.twig";
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
        return array (  164 => 43,  158 => 40,  154 => 39,  130 => 18,  126 => 17,  122 => 16,  117 => 13,  115 => 12,  112 => 11,  102 => 10,  92 => 7,  87 => 6,  77 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Chat Progetto - {{ project.name }}{% endblock %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/chat-project.css') }}\">
{% endblock %}

{% block body %}

{% include 'components/navbar.html.twig' %}

<div class=\"chat-container\">
    <div class=\"chat-header\">
        <a href=\"{{ path('project_show', { id: project.id }) }}\" class=\"back-btn\">← Return to project</a>
        <h2>Chat: {{ project.name }}</h2>
        <small>{{ project.userProjects|length }} participants</small>
    </div>
    
    <div id=\"chat-messages\" class=\"chat-messages\">
    </div>
    
    <div class=\"chat-input\">
        <form id=\"chat-form\" enctype=\"multipart/form-data\">
            <div class=\"input-group\">
                <input type=\"text\" id=\"message-input\" placeholder=\"Type a message to the team...\" maxlength=\"1000\">
                <input type=\"file\" id=\"media-input\" accept=\"image/*,video/*,audio/*,.pdf,.doc,.docx\" style=\"display: none;\">
                <button type=\"button\" id=\"media-btn\" class=\"media-btn\" title=\"Attach file\">📎</button>
                <button type=\"submit\">Send</button>
            </div>
            <div id=\"file-preview\" class=\"file-preview\" style=\"display: none;\"></div>
        </form>
    </div>
</div>

<script>
    window.chatConfig = {
        projectId: {{ project.id }},
        currentUserId: {{ app.user.id }}
    };
</script>
<script src=\"{{ asset('js/chat-project.js') }}\"></script>
{% endblock %}
", "chat/project.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/chat/project.html.twig");
    }
}
