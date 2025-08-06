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

/* components/navbar.html.twig */
class __TwigTemplate_fc880b308cfa15b3164fa954166d921b extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/navbar.html.twig"));

        // line 1
        yield "<div class=\"navbar\">
    <ul>
        <li>
            <a class=\"navbar-logo\" href=\"";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userpage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "user", [], "any", false, false, false, 4), "id", [], "any", false, false, false, 4)]), "html", null, true);
        yield "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xml:space=\"preserve\" viewBox=\"0 0 137.6 96.6\" fill=\"#fff\" stroke=\"transparent\" width=\"40\" height=\"32\" style=\"margin-left: 2px;\">
                    <path d=\"M229.2 443.9h50.7v25.4h25.3v-45.9h-50.6l50.6-50.7h-25.3l-50.7 50.7zM316.1 398.1l25.3-25.4h-25.3z\" fill=\"#fff\" transform=\"translate(-229.2 -372.7)\" style=\"margin-left: 2px;\">
                    </path>
                    <path d=\"m341.4 398.1-25.3 25.3v25.3h25.3v-25.3l25.4-25.3v-25.4h-25.4zM366.8 423.4l-25.4 25.3h25.4z\" fill=\"#fff\" transform=\"translate(-229.2 -372.7)\" style=\"margin-left: 2px;\">
                    </path>
                </svg>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("userpage", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14)]), "html", null, true);
        yield "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"25\" height=\"25\" fill=\"none\" stroke=\"#fff\">
                <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M23.5 23.5a10.135 10.135 0 0 0-1-4.057c-.746-1.492-4-2.5-8-4v-3a3.75 3.75 0 0 0 1.5-3c.5 0 1-2 0-2.5 0-.3 1.339-2.8 1-4.5-.5-2.5-7.5-2.5-8-.5-3 0-1 4.594-1 5-1 .5-.5 2.5 0 2.5a3.75 3.75 0 0 0 1.5 3v3c-4 1.5-7.255 2.508-8 4a10.135 10.135 0 0 0-1 4.057Z\">
                </path>
            </svg>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("project_list");
        yield "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"25\" height=\"25\" fill=\"none\" stroke=\"#fff\">
                    <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.499 10.499a4 4 0 1 0 8 0 4 4 0 1 0-8 0ZM.5 5.499a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM20.5 1.999a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM.5 21.999a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM11.999 21.999a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM3.06 20.938l7.62-7.601M16.333 7.676l4.605-4.616M3.35 6.149l6.472 2.775M20.562 14.028l-3.618-1.495M13.499 20.499v-6M20.5 14.499a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0Z\">
                    </path>
                </svg>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chat_index");
        yield "\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"25\" height=\"25\" fill=\"none\" stroke=\"#fff\">
                    <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.5 16.5c0 4.288 5 7.5 9.5 5.5l4 1.5-1.5-3a4.994 4.994 0 0 0 2-4c0-3.154-3.134-6-7-6s-7 2.846-7 6Z\">
                    </path>
                    <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.4 8.5a5.822 5.822 0 0 0 .1-1c0-3.866-3.8-7-8.5-7S.5 3.634.5 7.5a6.434 6.434 0 0 0 2.517 4.97L1 16l4.939-1.976a9.993 9.993 0 0 0 1.561.361\">
                    </path>
                </svg>
            </a>
        </li>
    </ul>
</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/navbar.html.twig";
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
        return array (  85 => 30,  74 => 22,  63 => 14,  50 => 4,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"navbar\">
    <ul>
        <li>
            <a class=\"navbar-logo\" href=\"{{ path('userpage', {'id': app.user.id}) }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xml:space=\"preserve\" viewBox=\"0 0 137.6 96.6\" fill=\"#fff\" stroke=\"transparent\" width=\"40\" height=\"32\" style=\"margin-left: 2px;\">
                    <path d=\"M229.2 443.9h50.7v25.4h25.3v-45.9h-50.6l50.6-50.7h-25.3l-50.7 50.7zM316.1 398.1l25.3-25.4h-25.3z\" fill=\"#fff\" transform=\"translate(-229.2 -372.7)\" style=\"margin-left: 2px;\">
                    </path>
                    <path d=\"m341.4 398.1-25.3 25.3v25.3h25.3v-25.3l25.4-25.3v-25.4h-25.4zM366.8 423.4l-25.4 25.3h25.4z\" fill=\"#fff\" transform=\"translate(-229.2 -372.7)\" style=\"margin-left: 2px;\">
                    </path>
                </svg>
            </a>
        </li>
        <li>
            <a href=\"{{ path('userpage', {'id': app.user.id}) }}\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"25\" height=\"25\" fill=\"none\" stroke=\"#fff\">
                <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M23.5 23.5a10.135 10.135 0 0 0-1-4.057c-.746-1.492-4-2.5-8-4v-3a3.75 3.75 0 0 0 1.5-3c.5 0 1-2 0-2.5 0-.3 1.339-2.8 1-4.5-.5-2.5-7.5-2.5-8-.5-3 0-1 4.594-1 5-1 .5-.5 2.5 0 2.5a3.75 3.75 0 0 0 1.5 3v3c-4 1.5-7.255 2.508-8 4a10.135 10.135 0 0 0-1 4.057Z\">
                </path>
            </svg>
            </a>
        </li>
        <li>
            <a href=\"{{ path('project_list') }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"25\" height=\"25\" fill=\"none\" stroke=\"#fff\">
                    <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.499 10.499a4 4 0 1 0 8 0 4 4 0 1 0-8 0ZM.5 5.499a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM20.5 1.999a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM.5 21.999a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM11.999 21.999a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0ZM3.06 20.938l7.62-7.601M16.333 7.676l4.605-4.616M3.35 6.149l6.472 2.775M20.562 14.028l-3.618-1.495M13.499 20.499v-6M20.5 14.499a1.5 1.5 0 1 0 3 0 1.5 1.5 0 1 0-3 0Z\">
                    </path>
                </svg>
            </a>
        </li>
        <li>
            <a href=\"{{ path('chat_index') }}\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" width=\"25\" height=\"25\" fill=\"none\" stroke=\"#fff\">
                    <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.5 16.5c0 4.288 5 7.5 9.5 5.5l4 1.5-1.5-3a4.994 4.994 0 0 0 2-4c0-3.154-3.134-6-7-6s-7 2.846-7 6Z\">
                    </path>
                    <path fill=\"none\" stroke=\"#fff\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M17.4 8.5a5.822 5.822 0 0 0 .1-1c0-3.866-3.8-7-8.5-7S.5 3.634.5 7.5a6.434 6.434 0 0 0 2.517 4.97L1 16l4.939-1.976a9.993 9.993 0 0 0 1.561.361\">
                    </path>
                </svg>
            </a>
        </li>
    </ul>
</div>", "components/navbar.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/components/navbar.html.twig");
    }
}
