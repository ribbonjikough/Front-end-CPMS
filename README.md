# 🚗 Front-end-CPMS
Front-end (and potentially back-end) for the **Car Parking Management System (CPMS)**.  
Combines layout, design, responsive interface, and interactive components.

---

## 🔄 Agile Sprinting Development Method  
**1 Sprint = 1 Week**

Agile-based development using a lightweight sprint structure.  
Each sprint focuses on completing vertical slices of front-end features.

---

###  Sprint 1 – Layout & Structure (Completed ✅)
 Week 1  
**Goal:** Complete overall layout: `topbar`, `primary sidebar`, `side menu` in **desktop ratio** only.

**Completed Tasks:**
- [x] Topbar component with company logo, title, and user info
- [x] Sidebar layout for desktop
- [x] Page navigation framework
- [x] Basic CSS structure + page shell

---

###  Sprint 2 – Page Structure + Dummy Graphs (Completed ✅)
 Week 2  
**Goal:** Build 50% of all pages, and add charts in dashboard and reports sections with dummy data.

**Completed Tasks:**
- [x] Created Dashboard page layout
- [x] Added 4 big cards per row (responsive-ready)
- [x] Integrated dummy graphs (ApexCharts and Chart.js)
- [x] Structured Reports pages and tested layout
- [x] Defined all sidebar navigation entries
- [x] Structured season parking section (50%)

---

###  Sprint 3 – Full Front-End + Responsive (In Progress)
 Week 3  
**Goal:** Complete:
- All remaining front-end pages
- Full responsive design for tablet & mobile
- Season Parking section fully built

**Sprint 3 Tasks:**
- [x] Mobile bottom nav + hamburger sidebar logic
- [x] Sidebar overlays and animations
- [ ] Refactor CSS with responsive breakpoints
- [ ] Tablet styling: horizontal scroll menus
- [ ] Mobile styling: drawer navigation and single-column layout
- [ ] Season Parking filters + search UI
- [ ] Finalize Settings and Admin pages

---

## 📊 Charting Tools Used
| Chart Library | Used For | Status |
|---------------|----------|--------|
| ApexCharts     | Dashboards, Reports | ✅ Working |
| Chart.js       | Alternative charts   | ⚠️ Bug found (black screen) |
| Peity          | Inline sparklines    | ⏳ For future (maybe for table row summaries) |

---

## 📱 Responsive Design Targets

| Device Type | Width Range     | Behavior                           |
|-------------|------------------|------------------------------------|
| Desktop     | ≥ 1000px         | Full layout, sidebars visible      |
| Tablet      | 600px – 999px    | Horizontal scroll menu, 2-column   |
| Mobile      | ≤ 599px          | Bottom nav, hamburger overlay menu |

---

## ⏭ Upcoming Sprint (Sprint 4 - Backend Integration)

**Planned:**
- Link forms & inputs with backend
- Integrate PHP + MySQL with data tables
- Handle AJAX requests for graphs and filters

---

##  Tools Used

- HTML, CSS, JS (Vanilla + ApexCharts + Chart.js)
- PHP (for partials, includes, and logic injection)
- XAMPP (local server testing)
- GitHub (version control and team sync)
- VS Code (live server / preview)

---

>  Sprint planning and progress are updated weekly.  
> Feel free to fork, clone, or contribute.
