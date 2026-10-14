# Dedicated Server

Bestellung: `POST /products/dedicated/servers`. ID: `data.server.id`.

Kundenfelder: `hostname`.

| Feld | Typ | Pflicht | Hinweis |
|---|---|---|---|
| `hostname` | string | Ja | Server hostname |
| `plan_id` | string | Ja | Plan ID |
| `auto_renew` | boolean | Nein | Enable auto-renew |
| `disk_layout_id` | integer | Nein | nullable; integer |
| `ipv4_count` | integer | Nein | Number of IPv4 addresses |
| `ipv6_count` | integer | Nein | Number of IPv6 subnets |
| `os_profile_id` | integer | Nein | OS profile id to install |
| `root_password` | string | Nein | Root password |
| `team_id` | string | Nein | nullable; string |
| `traffic_upgrade_key` | string | Nein | nullable; string |

API-Key-Rechte für alle Modulansichten und Aktionen: `dedicated:create`, `dedicated:delete`, `dedicated:read`, `dedicated:update`.

Verwaltungsaktionen: Reverse DNS ändern, Neuinstallation abbrechen, Umbenennen, Updates installieren.

Hinweise:
- auto_renew defaults true
- No suspend/unsuspend endpoint
