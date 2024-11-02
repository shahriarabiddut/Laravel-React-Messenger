import { Head } from "@inertiajs/react";
import AuthenticatedLayout from "./AuthenticatedLayout";

const SiteLayout = ({ title='',header='',children }) => (
    <>
    <Head title={title}/>
    <AuthenticatedLayout>
      {children}
    </AuthenticatedLayout>
    </>
  );
  
  export default SiteLayout;
  