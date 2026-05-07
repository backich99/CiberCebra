# 🦓 Cebra

**Directorio comunitario de especialistas en enfermedades raras y reumáticas en México**

> "Cuando escuches cascos, piensa en cebras." — Referencia médica a enfermedades raras.

---

## Requerimiento de Negocio

### Contexto de Negocio

**Problema:** En México, los pacientes con enfermedades raras y reumáticas (como Ehlers-Danlos o Espondiloartritis Axial No Radiográfica) enfrentan una barrera crítica: encontrar médicos con experiencia real en su condición. Actualmente, la información circula en grupos de WhatsApp donde es efímera, se pierde con el tiempo y no es accesible para nuevos pacientes. Las asociaciones existentes no generan suficiente confianza porque no son percibidas como construidas por la comunidad.

**Área afectada:** Comunidad de pacientes con enfermedades raras y reumáticas en los 32 estados de México.

**Situación actual:** Los pacientes dependen del boca a boca digital (WhatsApp) para encontrar especialistas. La información no es persistente, no es buscable, no es verificable y se pierde cuando alguien sale de un grupo o el historial se borra.

---

### Objetivo de Negocio

Reducir el tiempo y la incertidumbre que un paciente con enfermedad rara experimenta para encontrar un especialista con experiencia comprobada por otros pacientes, pasando de un proceso informal y efímero (días/semanas en grupos de WhatsApp) a una consulta directa en una plataforma comunitaria confiable.

---

### Stakeholders y Roles

| Rol | Descripción |
|-----|-------------|
| **Sponsor** | Comunidad de Cebras |
| **Usuario final** | Pacientes diagnosticados o con sospecha de enfermedad rara/reumática en México |
| **Afectados indirectos** | Médicos especialistas (reciben visibilidad), asociaciones de pacientes, cuidadores y familiares |

---

### Alcance y Límites

**Incluye:**
- Directorio de médicos especialistas recomendados por la comunidad
- Sistema de recomendaciones y reputación (karma) basado en retroalimentación comunitaria
- Búsqueda por enfermedad, especialidad y ubicación geográfica (estado/ciudad)
- Catálogo extensible de enfermedades raras y reumáticas (no limitado a EDS o Espondiloartritis)
- Cobertura nacional (32 estados de México)

**Excluye explícitamente:**
- No es un foro de discusión
- No es telemedicina ni ofrece consultas médicas
- No es una red social
- No es un directorio pagado por médicos ni por nadie
- No incluye (por ahora) contenido educativo o guías sobre enfermedades (backlog futuro)

---

### Necesidades del Negocio

1. Los pacientes deben poder buscar especialistas por enfermedad, especialidad y ubicación geográfica
2. Cualquier usuario registrado debe poder recomendar a un médico y compartir su experiencia
3. El sistema debe reflejar la confiabilidad de las recomendaciones mediante un mecanismo de reputación comunitaria (karma)
4. La información debe ser persistente, buscable y accesible en cualquier momento
5. La plataforma debe ser percibida como construida por y para la comunidad

---

### Criterios de Éxito y Métricas

| Métrica | Objetivo inicial (6 meses) |
|---------|---------------------------|
| Usuarios activos mensuales | ≥ 100 |
| Médicos recomendados en la plataforma | ≥ 50 |
| Estados con al menos 1 médico registrado | ≥ 10 |
| Recomendaciones con retroalimentación comunitaria | ≥ 60% |

---

### Restricciones y Supuestos

**Restricciones:**
- Hosting: HostGator compartido (PHP 8.x, MySQL 5.7/8.0, Laravel 10/11 compatible)
- Presupuesto: mínimo (infraestructura ya disponible)
- Organización: sin fines de lucro / BCorp
- No se almacenan datos médicos de pacientes (solo recomendaciones de doctores)

**Supuestos:**
- Los pacientes están dispuestos a registrarse para compartir recomendaciones
- La comunidad de WhatsApp existente será la semilla inicial de usuarios
- Un sistema de karma será suficiente para generar confianza sin moderación intensiva
- No se requiere verificación formal de credenciales médicas (la validación es comunitaria)

---

### Dependencias

| Dependencia | Tipo | Riesgo |
|-------------|------|--------|
| Hosting HostGator activo | Infraestructura | Bajo |
| Comunidad semilla (grupos de WhatsApp) | Adopción | Medio |
| Dominio web | Infraestructura | Bajo |

---

### Prioridad y Urgencia (MoSCoW)

| Prioridad | Capacidad |
|-----------|-----------|
| **Must** | Búsqueda de médicos por enfermedad y ubicación |
| **Must** | Registro de usuarios y recomendación de médicos |
| **Must** | Persistencia y accesibilidad de la información |
| **Should** | Sistema de karma/reputación comunitaria |
| **Should** | Perfil de médico con resumen de recomendaciones |
| **Could** | Notificaciones de nuevos médicos en tu estado |
| **Won't (por ahora)** | Contenido educativo sobre enfermedades |
| **Won't (por ahora)** | App móvil nativa |

---

### Trazabilidad

```
Objetivo estratégico
└── Democratizar el acceso a especialistas en enfermedades raras en México
    ├── Req. de negocio: Directorio comunitario de especialistas
    │   ├── Req. funcional: Búsqueda por enfermedad/ubicación
    │   ├── Req. funcional: Alta de médicos por usuarios
    │   ├── Req. funcional: Sistema de karma/reputación
    │   └── Req. funcional: Perfil público de médico
    └── Futuro: Base de conocimiento sobre enfermedades (backlog)
```

---

## Stack Tecnológico

| Componente | Tecnología |
|------------|-----------|
| Backend | PHP 8.x / Laravel |
| Base de datos | MySQL 8.0 |
| Frontend | HTML, CSS, JavaScript |
| Hosting | HostGator (plan compartido) |

---

## Licencia

MIT License. Este proyecto es sin fines de lucro, construido por y para la comunidad de pacientes con enfermedades raras en México.

---

*"No estás solo. Somos manada."* 🦓
