<script setup lang="ts">
import AppSidebar from "@/components/AppSidebar.vue"
import SiteHeader from "@/components/SiteHeader.vue"
import type { PageProps } from "@inertiajs/core"
import { usePage } from "@inertiajs/vue3"
import { computed } from "vue"
import {
  SidebarInset,
  SidebarProvider,
} from "@/components/ui/sidebar"

interface PropsDoLaravel extends PageProps{
  Name: string;
  Email: string;
}
const page = usePage<PropsDoLaravel>();
const userData = page.props;
</script>

<template>
  <SidebarProvider
    :style="{
      '--sidebar-width': 'calc(var(--spacing) * 72)',
      '--header-height': 'calc(var(--spacing) * 12)',
    }"
  >
    <AppSidebar variant="inset" :userData="userData" />
    
    <SidebarInset>
      <SiteHeader />
      
      <main class="flex flex-1 flex-col p-4">
         <slot /> 
      </main>
    </SidebarInset>
  </SidebarProvider>
</template>
