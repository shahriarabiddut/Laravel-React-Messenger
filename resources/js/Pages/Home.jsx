import ChatLayout from '@/Layouts/ChatLayout';
import SiteLayout from '@/Layouts/SiteLayout';

const Home = ()=> {
    return (
        <>
            <ChatLayout></ChatLayout>
            <div className="py-12">
                Messages
            </div>
        </>
    );
}
Home.layout = page => <SiteLayout title={'Dahsboard'} header={'Dahsboard'}>{page}</SiteLayout>;
export default Home