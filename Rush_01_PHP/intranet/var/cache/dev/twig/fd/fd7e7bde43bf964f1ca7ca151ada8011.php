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

/* notifications/index.html.twig */
class __TwigTemplate_2e409b87389095f382738934a6a3b13d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notifications/index.html.twig"));

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
        yield " | Notifications";
        
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/notifications-page.css"), "html", null, true);
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
        yield "    ";
        yield from $this->load("components/navbar.html.twig", 11)->unwrap()->yield($context);
        // line 12
        yield "    ";
        yield from $this->load("components/searchbar.html.twig", 12)->unwrap()->yield($context);
        // line 13
        yield "    
    <div class=\"notifications-page-container\">
        <div class=\"notifications-page-header\">
            <div class=\"notifications-page-title\">
                <div class=\"notifications-icon\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"28\" height=\"28\" fill=\"none\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-5 5V17zM15 17H9a6 6 0 01-6-6V5a2 2 0 012-2h14a2 2 0 012 2v6a6 6 0 01-6 6z\"/>
                    </svg>
                </div>
                <h1>Notifications</h1>
                <div class=\"notifications-count-badge\">
                    ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["unreadCount"]) || array_key_exists("unreadCount", $context) ? $context["unreadCount"] : (function () { throw new RuntimeError('Variable "unreadCount" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "
                </div>
            </div>
            <div class=\"notifications-actions\">
                <button id=\"mark-all-read-page\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4\"/>
                    </svg>
                    Mark All as Read
                </button>
                <a href=\"/userpage/";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34), "html", null, true);
        yield "\" class=\"btn btn-secondary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 12H5m7-7l-7 7 7 7\"/>
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
        
        <div class=\"notifications-content\">
            ";
        // line 44
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 44, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "                <div class=\"notifications-list-modern\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 46, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 47
                yield "                        <div class=\"notification-card\" data-index=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 47), "html", null, true);
                yield "\">
                            <div class=\"notification-indicator\"></div>
                            <div class=\"notification-details\">
                                <div class=\"notification-message\">
                                    ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["notification"], "html", null, true);
                yield "
                                </div>
                                <div class=\"notification-timestamp\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"none\" stroke=\"currentColor\">
                                        <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                        <polyline points=\"12,6 12,12 16,14\"/>
                                    </svg>
                                    <span>Just now</span>
                                </div>
                            </div>
                            <div class=\"notification-actions-item\">
                                <button class=\"notification-action-btn mark-single-read\" title=\"Mark as read\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4\"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            yield "                </div>
                
                <div class=\"notifications-pagination\">
                    <div class=\"pagination-info\">
                        Showing ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 74, $this->source); })())), "html", null, true);
            yield " notifications
                    </div>
                    <div class=\"pagination-controls\">
                    </div>
                </div>
            ";
        } else {
            // line 80
            yield "                <div class=\"notifications-empty-state\">
                    <div class=\"empty-state-icon\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"48\" height=\"48\" fill=\"none\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/>
                        </svg>
                    </div>
                    <h3>No notifications yet</h3>
                    <p>When you have new notifications, they'll appear here. Stay tuned for updates!</p>
                    <a href=\"/\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
                        </svg>
                        Go to Dashboard
                    </a>
                </div>
            ";
        }
        // line 96
        yield "        </div>
    </div>

    <script src=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notifications-page.js"), "html", null, true);
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
        return "notifications/index.html.twig";
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
        return array (  259 => 99,  254 => 96,  236 => 80,  227 => 74,  221 => 70,  188 => 51,  180 => 47,  163 => 46,  160 => 45,  158 => 44,  145 => 34,  132 => 24,  119 => 13,  116 => 12,  113 => 11,  103 => 10,  93 => 7,  88 => 6,  78 => 5,  59 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} {{parent()}} | Notifications{% endblock %}

{% block stylesheets %}
    {{parent()}}
    <link rel=\"stylesheet\" href=\"{{ asset('css/notifications-page.css') }}\">
{% endblock %}

{% block body %}
    {% include 'components/navbar.html.twig' %}
    {% include 'components/searchbar.html.twig' %}
    
    <div class=\"notifications-page-container\">
        <div class=\"notifications-page-header\">
            <div class=\"notifications-page-title\">
                <div class=\"notifications-icon\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"28\" height=\"28\" fill=\"none\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M15 17h5l-5 5V17zM15 17H9a6 6 0 01-6-6V5a2 2 0 012-2h14a2 2 0 012 2v6a6 6 0 01-6 6z\"/>
                    </svg>
                </div>
                <h1>Notifications</h1>
                <div class=\"notifications-count-badge\">
                    {{ unreadCount }}
                </div>
            </div>
            <div class=\"notifications-actions\">
                <button id=\"mark-all-read-page\" class=\"btn btn-primary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4\"/>
                    </svg>
                    Mark All as Read
                </button>
                <a href=\"/userpage/{{ user.id }}\" class=\"btn btn-secondary\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 12H5m7-7l-7 7 7 7\"/>
                    </svg>
                    Back to Home
                </a>
            </div>
        </div>
        
        <div class=\"notifications-content\">
            {% if notifications is not empty %}
                <div class=\"notifications-list-modern\">
                    {% for notification in notifications %}
                        <div class=\"notification-card\" data-index=\"{{ loop.index0 }}\">
                            <div class=\"notification-indicator\"></div>
                            <div class=\"notification-details\">
                                <div class=\"notification-message\">
                                    {{ notification }}
                                </div>
                                <div class=\"notification-timestamp\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"14\" height=\"14\" fill=\"none\" stroke=\"currentColor\">
                                        <circle cx=\"12\" cy=\"12\" r=\"10\"/>
                                        <polyline points=\"12,6 12,12 16,14\"/>
                                    </svg>
                                    <span>Just now</span>
                                </div>
                            </div>
                            <div class=\"notification-actions-item\">
                                <button class=\"notification-action-btn mark-single-read\" title=\"Mark as read\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 12l2 2 4-4\"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    {% endfor %}
                </div>
                
                <div class=\"notifications-pagination\">
                    <div class=\"pagination-info\">
                        Showing {{ notifications|length }} notifications
                    </div>
                    <div class=\"pagination-controls\">
                    </div>
                </div>
            {% else %}
                <div class=\"notifications-empty-state\">
                    <div class=\"empty-state-icon\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"48\" height=\"48\" fill=\"none\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z\"/>
                        </svg>
                    </div>
                    <h3>No notifications yet</h3>
                    <p>When you have new notifications, they'll appear here. Stay tuned for updates!</p>
                    <a href=\"/\" class=\"btn btn-primary\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"16\" height=\"16\" fill=\"none\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6\"/>
                        </svg>
                        Go to Dashboard
                    </a>
                </div>
            {% endif %}
        </div>
    </div>

    <script src=\"{{ asset('js/notifications-page.js') }}\"></script>
{% endblock %}
", "notifications/index.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/notifications/index.html.twig");
    }
}
