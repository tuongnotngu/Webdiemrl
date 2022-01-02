#include<bits/stdc++.h>
using namespace std;
using std::string;
string a;
long long int dem,s;
int main()
{
    freopen("repetitions.inp","r",stdin);
    freopen("repetitions.out","w",stdout);
    getline(cin,a);
    dem=1;
    s=0;
    for(int i=0;i<a.size();i++){
        if(a[i]==a[i+1]) dem=dem+1;
        else dem=1;
        if(dem>s) s=dem;
    }
    cout<<s;

}
