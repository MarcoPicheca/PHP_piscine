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

/* components/script.html.twig */
class __TwigTemplate_8c3097c869fc9e1281c7831e4b7f1519 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "components/script.html.twig"));

        // line 1
        yield "<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('user-search');
        const resultsContainer = document.getElementById('search-results');

        input.addEventListener('input', async function () {
            const query = input.value.trim();

            if (query.length === 0) {
                resultsContainer.style.display = 'none';
                resultsContainer.innerHTML = '';
                return;
            }

            try {
                const response = await fetch(`/api/search/users?q=\${encodeURIComponent(query)}`);
                const users = await response.json();

                resultsContainer.innerHTML = '';
                if (users.length > 0) {
                    users.forEach(user => {
                        const li = document.createElement('li');
                        const link = document.createElement('a');
                        link.href = `/userpage/\${user.id}`;
                        link.textContent = `\${user.firstName} \${user.lastName} (\${user.email})`;
                        li.appendChild(link);
                        resultsContainer.appendChild(li);
                    });
                    resultsContainer.style.display = 'block';
                } else {
                    resultsContainer.style.display = 'none';
                }
            } catch (error) {
                console.error('Error fetching users:', error);
            }
        });

        document.addEventListener('click', function (e) {
            if (!input.contains(e.target) && !resultsContainer.contains(e.target)) {
                resultsContainer.style.display = 'none';
            }
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('dropdown-toggle');
    const menu = document.getElementById('dropdown-menu');

    toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
    });

    document.addEventListener('click', function () {
        menu.style.display = 'none';
    });
});
</script>

<script src=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/notifications.js"), "html", null, true);
        yield "\"></script>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/script.html.twig";
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
        return array (  108 => 62,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<script>
    document.addEventListener('DOMContentLoaded', function () {
        const input = document.getElementById('user-search');
        const resultsContainer = document.getElementById('search-results');

        input.addEventListener('input', async function () {
            const query = input.value.trim();

            if (query.length === 0) {
                resultsContainer.style.display = 'none';
                resultsContainer.innerHTML = '';
                return;
            }

            try {
                const response = await fetch(`/api/search/users?q=\${encodeURIComponent(query)}`);
                const users = await response.json();

                resultsContainer.innerHTML = '';
                if (users.length > 0) {
                    users.forEach(user => {
                        const li = document.createElement('li');
                        const link = document.createElement('a');
                        link.href = `/userpage/\${user.id}`;
                        link.textContent = `\${user.firstName} \${user.lastName} (\${user.email})`;
                        li.appendChild(link);
                        resultsContainer.appendChild(li);
                    });
                    resultsContainer.style.display = 'block';
                } else {
                    resultsContainer.style.display = 'none';
                }
            } catch (error) {
                console.error('Error fetching users:', error);
            }
        });

        document.addEventListener('click', function (e) {
            if (!input.contains(e.target) && !resultsContainer.contains(e.target)) {
                resultsContainer.style.display = 'none';
            }
        });
    });
</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('dropdown-toggle');
    const menu = document.getElementById('dropdown-menu');

    toggle.addEventListener('click', function (e) {
        e.stopPropagation();
        menu.style.display = (menu.style.display === 'block') ? 'none' : 'block';
    });

    document.addEventListener('click', function () {
        menu.style.display = 'none';
    });
});
</script>

<script src=\"{{ asset('js/notifications.js') }}\"></script>", "components/script.html.twig", "/home/mapichec/Desktop/Piscine-PHP-Rush01/intranet/templates/components/script.html.twig");
    }
}
